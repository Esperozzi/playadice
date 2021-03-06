<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../Resources/now-ui-kit.css" type="text/css">
  <link rel="stylesheet" href="../Resources/assets/css/nucleo-icons.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <title>Crea Nuovo Avatar</title>
</head>

<body class="">

{user->getUsername assign='Username'}
  <!-- Navbar here -->
  {include file="navbar.tpl"}

  <div class="column" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)), url('../Resources/assets/BG.png'); background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat; min-height: 1000px">
    <!-- Sezione FORM -->
    <form method="post" id="c_form-h" class="" action="submitnewavatar">
      <div class="py-5">
        <div class="container ">
          <div class="col-md-12">

            <div class="form-group row">
              <label for="nome-input" style="color:White;" class="col-2 col-form-label"><b>Nome Avatar</b></label>
              <div class="col-10">
                <input type="text" name="nome" class="form-control" placeholder="Inserisci qui il Testo" {if $avatar} value="{$avatar->getNome()} "{/if}>
                {if ! $check.Nome}
                  <div class="alert alert-warning">
                    <small >
                      Nome troppo corto, lungo o contenente caratteri non ammessi
                    </small>
                  </div>
                {/if}
              </div>
            </div>

            <div class="form-group row">
              <label for="classe-input" style="color:White;" class="col-2 col-form-label"><b>Classe Avatar</b></label>
              <div class="col-10">
                <input type="text" name="classe" class="form-control" placeholder="Inserisci qui il Testo" {if $avatar} value="{$avatar->getClasse()}"{/if}>
                {if ! $check.Classe}
                  <div class="alert alert-warning">
                    <small >
                      Classe troppo corta, lunga o contenente caratteri non ammessi
                    </small>
                  </div>
                {/if}
              </div>
            </div>

            <div class="form-group row">
              <label for="razza-input" style="color:White;" class="col-2 col-form-label"><b>Razza Avatar</b></label>
              <div class="col-10">
                <input type="text" name="razza" class="form-control" placeholder="Inserisci qui il Testo" {if $avatar} value="{$avatar->getRazza()}"{/if}>
                {if ! $check.Razza}
                  <div class="alert alert-warning">
                    <small >
                      Razza troppo corta, lunga o contenente caratteri non ammessi
                    </small>
                  </div>
                {/if}
              </div>
            </div>

            <div class="form-group row">
              <label for="livello-input" style="color:White;" class="col-2 col-form-label"><b>Livello Avatar</b></label>
              <div class="col-10">
                <input type="number" name="livello" class="form-control" placeholder="Inserisci qui il Testo" {if $avatar} value="{$avatar->getLivello()}"{/if}>
                {if ! $check.Livello}
                  <div class="alert alert-warning">
                    <small >
                      Livello al di fuori dei parametti ammessi
                    </small>
                  </div>
                {/if}
              </div>
            </div>

            <div class="form-group row">
              <label for="checkbox input" style="color:White;" class="col-2 col-form-label"><b>Privato</b></label>
              <div class="pl-4 col-form-label align-content-center pt-3">
                <input type="checkbox" class="custom-checkbox" id="checkbox input" value="1" name="privato">
              </div>
            </div>

            <div class="text-right">
              <button type="submit" class="btn btn-primary " >Submit</button>
            </div>

          </div>
        </div>
      </div>
    </form>

  </div>
</body>

</html>