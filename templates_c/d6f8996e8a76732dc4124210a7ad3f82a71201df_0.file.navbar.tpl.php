<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-14 13:08:45
  from 'C:\xampp\htdocs\playadice\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0d923dd68c09_53948148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8305bcb080adcf3c796877fb77daef7eb759b86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\playadice\\templates\\navbar.tpl',
      1 => 1594646162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d923dd68c09_53948148 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
                <ul class="navbar-nav">
                        <ul class="navbar-nav">
                                <span class="nav-link" href="">Benvenuto&nbsp<?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
</span>
                                <a class="nav-link space" href=""> &nbsp;</a>
                                <a class="nav-link" href="/playadice"> &nbsp;Home</a>
                                <a class="nav-link" href="/playadice/evento/showAll"> &nbsp;Eventi</a>
                                <a class="nav-link" href="/playadice/catalogo/catalogocompleto"> &nbsp;Giochi</a>
                                <a class="nav-link" href="/playadice/ricerca/ShowPersonal">   &nbsp;AreaTWG</a>
                                <?php if ($_smarty_tpl->tpl_vars['UtenteType']->value != "ospite") {?>
                                        <a class="nav-link" href="/playadice/utente/openProfile">&nbsp;Profilo</a>
                                <?php }?>

                        </ul>
                </ul>
        </div>
        <div class="container">
        </div>
        <?php if ($_smarty_tpl->tpl_vars['Username']->value == "Ospite") {?>
        <a class="btn navbar-btn ml-md-2 btn-light text-dark" href="/playadice/utente/login">Login/Sign Up</a>
        <?php } else { ?>
        <a class="btn navbar-btn ml-md-2 btn-light text-dark" href="/playadice/utente/logout">Logout</a>
        <?php }?>

        <a href="" class="nav-link space">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
        <ul class="navbar-nav flex-row justify-content-center mt-2 mt-md-0">
                <li class="nav-item mx-3 mx-md-1">
                        <a class="nav-link" href="https://www.facebook.com/Playadice/" target="_blank" data-placement="bottom" data-toggle="tooltip" title="Like us on Facebook">
                                <i class="fa fa-fw fa-facebook-official fa-2x"></i>
                        </a>
                </li>
                <li class="nav-item ml-1">
                        <a class="nav-link" href="https://www.instagram.com/playadiceofficial/" target="_blank" data-placement="bottom" data-toggle="tooltip" title="Follow us on Instagram">
                                <i class="fa fa-fw fa-instagram fa-2x"></i>
                        </a>
                </li>
        </ul>
</nav><?php }
}
