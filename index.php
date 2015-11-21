<?php
require __DIR__ . '/vendor/autoload.php';

// Montando a Pagina Principal
$objSmarty = new Smarty;
$objSmarty->template_dir = 'templates/';
$objSmarty->compile_dir  = 'templates_c/';

// Montando o HTML
//$objSmarty->assign('arr_breadcrumbs', $arr_breadcrumbs);
$objSmarty->display('index.tpl');