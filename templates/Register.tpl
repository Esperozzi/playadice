<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../Resources/now-ui-kit.css" type="text/css">
    <title>Registrazione</title>
</head>
<body>

{user->getUsername assign='Username'}

{include file="navbar.tpl"}

<div class="container text-center">
    <div class="col-sm-3">

    </div>
        <h2>Register</h2>
        <hr>
        {if ! $check.Esistente}
        <div class="alert alert-warning">
            <!-- Errore form-->
            <strong>Attenzione!</strong><br>Username già utilizzato <br>Per favore sceglierne un altro. </div>
            {elseif $error}
            <div class="alert alert-warning">
            <strong>Attenzione!</strong><br>Alcuni campi sono errati <br>Per favore riprova. </div>
        {/if}
        <form method="post" enctype="multipart/form-data" action="signup">

            <div class="form-group row">
                <label for="user" class="col-sm-5 col-form-label">Username: </label>
                <div class="col">
                    <input type="text" class="form-control " id="user" name="Username" placeholder="Insert username..." maxlength="20"
                            {if isset($userInserted->getUsername())}
                        value="{$userInserted->getUsername()}"
                            {/if}>
                </div>
                {if ! $check.Username}
                    <div class="alert alert-warning">
                        <small >
                            6-20 Caratteri Alphanumerici.<br>Campo obbligatorio
                        </small>
                    </div>
                {/if}

            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-5 col-form-label ">Password:</label>
                <div class="col">
                    <input type="password" class="form-control " id="inputPassword" name="Password" placeholder="Password" maxlength="20">
                </div>
                {if ! $check.Password}
                    <div class="alert alert-warning">
                        <small>
                            6-20 Caratteri Alphanumerici.<br>Campo obbligatorio
                        </small>
                    </div>
                {/if}


            </div>

            <div class="form-group row">
                <label for="mail" class="col-sm-5 col-form-label ">Email:</label>
                <div class="col">
                    <input type="text" class="form-control " id="mail" name="Mail" placeholder="Insert email..." maxlength="40"
                            {if isset($userInserted->getMail())}
                        value="{$userInserted->getMail()}"
                            {/if}>
                </div>
                {if ! $check.Mail}
                    <div class="alert alert-warning">
                        <small >
                            Deve essere un'email(lunghezza max 40).<br>Campo obbligatorio
                        </small>
                    </div>
                {/if}

            </div>
            <div class="form-group row">
                <label for="nome" class="col-sm-5 col-form-label ">Nome:</label>
                <div class="col">
                    <input type="text" class="form-control " id="mail" name="Nome" placeholder="Insert Name..." maxlength="20"
                            {if isset($userInserted->getNome())}
                        value="{$userInserted->getNome()}"
                            {/if}>
                </div>
                {if ! $check.Nome}
                    <div class="alert alert-warning">
                        <small >
                            Solo Caratteri(lunghezza max 20).<br>Campo obbligatorio
                        </small>
                    </div>
                {/if}

            </div>
            <div class="form-group row">
                <label for="cognome" class="col-sm-5 col-form-label ">Cognome:</label>
                <div class="col">
                    <input type="text" class="form-control " id="mail" name="Cognome" placeholder="Insert Surname..." maxlength="30"
                            {if isset($userInserted->getCognome())}
                        value="{$userInserted->getCognome()}"
                            {/if}>
                </div>
                {if ! $check.Cognome}
                    <div class="alert alert-warning">
                        <small>
                            Solo Caratteri(lunghezza max 30).<br>Campo obbligatorio
                        </small>
                    </div>
                {/if}

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</div>
    <div class="col-sm-3">

    </div>

</body>
</html>
