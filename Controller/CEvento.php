<?php

/**
 *
 * Il Controller CSong implementa le funzionalitÃ  'Gestione Brano'.
 * Un musicista puÃ² creare un brano, ed insieme ai moderatori puÃ² modificarlo o rimuoverlo.
 *
 * @author Gruppo DelSignore/Marottoli/Perozzi
 * @package Controller
 */
class CEvento
{
    static function showAll()
    {
        $vEvento = new VEvento(); // crea la view
        $user = CSession ::getUserFromSession(); // ottiene l'utente dalla sessione
        $eventi = FPersistantManager ::getInstance() -> search("Evento", "All", ''); // carica tutti gli eventi
        $vEvento -> showAll($user, $eventi); // mostra la pagina degli eventi

    }

}