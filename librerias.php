<?php
function bootstrap_css(){
  global $raiz; 
  $texto='<link rel="stylesheet" type="text/css" href="' . $raiz . 'vendor/twbs/bootstrap/dist/css/bootstrap.css">';
  return($texto);
}
function jquery_js(){
  global $raiz; 
  $texto='<script src="' . $raiz . 'vendor/components/jquery/jquery.js"></script>';
  return($texto);
}
function notificacion(){
  global $raiz; 
  $texto='<script src="' . $raiz . 'js/notify.js"></script>';
  return($texto);
}
?>