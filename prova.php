<?php
require __DIR__ . '/vendor/autoload.php';

// Montando a Pagina Principal
$objSmarty = new Smarty;
$objSmarty->template_dir = 'templates/';
$objSmarty->compile_dir  = 'templates_c/';

// Busanco o index
$_INDEX = $objSmarty->fetch('prova.tpl');

// Montando o HTML
$objSmarty->assign('INDEX', $_INDEX);
$objSmarty->display('base.tpl');