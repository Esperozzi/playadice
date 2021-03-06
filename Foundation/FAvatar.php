<?php

/**
 * La classe FAvatar fornisce query per gli oggetti EAvatar
 * @package Foundation
 */
class FAvatar
{
    static function searchAvatarByAll() : string
    {
        return "SELECT *
                FROM avatar;";
    }

    static function searchAvatarByNome() : string
    {
        return "SELECT *
                FROM avatar
                WHERE LOCATE( :Nome , Nome ) > 0;";
    }

    static function searchAvatarByIdAvatar() : string
    {
        return "SELECT *
                FROM avatar
                WHERE IdAvatar = :IdAvatar;";
    }

    static function searchAvatarByUsernameUtente() : string
    {
        return "SELECT *
                FROM avatar
                WHERE UsernameUtente = :UsernameUtente;";
    }

    static function searchAvatarByOrderingUsernameUtente() : string
    {
        return "SELECT *
                FROM avatar
                WHERE LOCATE( :OrderingUsernameUtente , UsernameUtente) > 0;";
    }

    /**
     * @return string Sql valido per tutti gli avatar che si trovano in una proposta come "Proposti"
     */
    static function searchAvatarByAllProposed() : string
    {
        return "SELECT *
                FROM avatar,proposta
                WHERE IDAvatar = IDProposto";
    }

    static function storeAvatar() : string
    {
        return "INSERT INTO avatar(Livello, Nome , UsernameUtente, Classe, Razza)
				VALUES(:Livello, :Nome, :Proprietario, :Classe, :Razza)";
    }

    /**
     * Query che effettua l'aggiornamento di un Avatar nella table avatar
     * @return string contenente la query sql
     */
    static function updateAvatar() : string
    {
        return "UPDATE avatar
                SET  Livello = :Livello, Nome = :Nome, UsernameUtente = :Proprietario, Classe = :Classe, Razza = :Razza
                WHERE IdAvatar = :IdAvatar ;";
    }
    /**
     * Elimina un avatar dal db .
     */
    static function removeAvatar() : string
    {
        return "DELETE 
                FROM avatar
                WHERE IdAvatar = :IdAvatar;"; //query sql

    }


    static function bindValues(PDOStatement &$stmt, EAvatar &$Avatar)
    {
        $result = var_export($stmt, true);
        if( strpos( $result, ":Livello" ) !== false)
            $stmt->bindValue(':Livello', $Avatar->getLivello(), PDO::PARAM_STR);
        if( strpos( $result, ":Nome" ) !== false)
            $stmt->bindValue(':Nome', $Avatar->getNome(), PDO::PARAM_STR);
        if( strpos( $result, ":Proprietario" ) !== false)
            if ($Avatar->getProprietario() != null)
               $stmt->bindValue(':Proprietario', $Avatar->getProprietario()->getUsername(), PDO::PARAM_STR);
            else
               $stmt->bindValue(':Proprietario', null, PDO::PARAM_STR);
        if( strpos( $result, ":Classe" ) !== false)
            $stmt->bindValue(':Classe', $Avatar->getClasse(), PDO::PARAM_STR);
        if( strpos( $result, ":Razza" ) !== false)
            $stmt->bindValue(':Razza', $Avatar->getRazza(), PDO::PARAM_STR);
        if( strpos( $result, ":IdAvatar" ) !== false)
            $stmt->bindValue(':IdAvatar', $Avatar->getId(), PDO::PARAM_STR);
    }

    /**
     * Crea una Entity da una row del database
     * @param array $row avente come indici i campi della table da cui e' stata prelevata l'entry
     * @return EAvatar
     */
    static function createObjectFromRow($row)
    {

        $Avatar = new EAvatar();

        $Avatar->setLivello($row['Livello']);
        $Avatar->setNome($row['Nome']);

        if ( ($row['UsernameUtente']) != null )
        {
        $Pippo = FPersistantManager::getInstance()->search("Utente","UserName",($row['UsernameUtente']));
        $Avatar->setProprietario($Pippo[0]);
        }

        $Avatar->setClasse($row['Classe']);
        $Avatar->setRazza($row['Razza']);
        $Avatar->setId($row['IdAvatar']);

        return $Avatar;
    }


}