<?php
$raiz="../";
include_once( $raiz . "nucleo.php");
$conexion=new generador_formatos();

function insertar_formulario(){
  global $conexion;
  $retorno = array();
  
  $nombre = @$_REQUEST["nombre"];
  $etiqueta = @$_REQUEST["etiqueta"];
  
  $campos = array('nombre', 'etiqueta', 'fecha');
  $valores = array("'" . $nombre . "'", "'" . $etiqueta . "'", "'" . date('Y-m-d H:i:s') . "'");
  $tabla = "formulario";
  
  $insertar = $conexion -> insertar($tabla, $campos, $valores);
  if($insertar){
    $retorno["mensaje"] = "Formulario creado";
    $retorno["exito"] = 1;
    $retorno["idformulario"] = $insertar;
  }else{
    $retorno["mensaje"] = "Error";
    $retorno["exito"] = 0;
  }
  
  echo(json_encode($retorno));
}
if(@$_REQUEST["ejecutar"]){
  $_REQUEST["ejecutar"]();
}


?>