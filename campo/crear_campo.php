<?php
$raiz="../";
include_once( $raiz . "nucleo.php");
$conexion=new generador_formatos();

require_once  '../vendor/autoload.php';
include_once ('../librerias.php');

global $raiz;
$raiz="../";

echo(bootstrap_css());
echo(jquery_js());
echo(notificacion());
?>
<html>
  <head>
    <script>
    $(document).ready(function(){
    });
    </script>
  </head>
  <body>
    <form>
      <div class="container">
        <legend>Crear campo</legend>
        
          <?php
          $sql1="select idformulario, etiqueta, nombre from formulario order by idformulario asc";
          $resultado = $conexion -> listar_datos($sql1);
          
          $opciones = array();
          
          $opciones[] = "<option value=''>Seleccione</option>";
          for($i=0;$i<$resultado["cant_resultados"];$i++){
            $adicional = "";
            if(@$_REQUEST["idformulario"] == $resultado[$i]["idformulario"]){
              $adicional = "selected";
            }
            $opciones[] = "<option value='" . $resultado[$i]["idformulario"] . "' " . $adicional . ">" . $resultado[$i]["etiqueta"] . " (" . $resultado[$i]["nombre"] . " - " . $resultado[$i]["idformulario"] . ")</option>";
          }
          if(@$_REQUEST["idformulario"]){
            
          }
          
          
          ?>
        <div class="form-group">
          <label for="formulario">Formulario</label>
          <select class="form-control" id="idformulario">
          <?php echo(implode("", $opciones)); ?>
          </select>
        </div> 
        <div class="form-group">
          <label for="exampleFormControlInput1">Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Etiqueta</label>
          <input type="text" class="form-control" id="nombre" placeholder="">
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlInput1">Tipo de campo</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_campo" id="tipo_campo1" value="int">
            <label class="form-check-label" for="">
              Entero
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_campo" id="tipo_campo2" value="varchar">
            <label class="form-check-label" for="">
              Varchar
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="tipo_campo" id="tipo_campo3" value="text">
            <label class="form-check-label" for="">
              Texto
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="tipo_campo" id="tipo_campo4" value="date">
            <label class="form-check-label" for="">
              Fecha
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="tipo_campo" id="tipo_campo5" value="datetime">
            <label class="form-check-label" for="">
              Fecha y hora
            </label>
          </div>
        </div>
        
        <div class="form-group">
          <label for="">Longitud</label>
          <input type="text" class="form-control" id="longitud" placeholder="">
        </div>
        
        <div class="form-group">
          <label for="">Defecto</label>
          <input type="text" class="form-control" id="defecto" placeholder="">
        </div>
        
        <div class="form-group">
          <label for="">HTML</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="html" id="html1" value="varchar">
            <label class="form-check-label" for="">
              Campo de texto
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="html" id="html2" value="textarea">
            <label class="form-check-label" for="">
              Area de texto
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="html" id="html3" value="fecha">
            <label class="form-check-label" for="">
              Fecha
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="html" id="html4" value="fecha_hora">
            <label class="form-check-label" for="">
              Fecha y hora
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="html" id="html5" value="radio">
            <label class="form-check-label" for="">
              Radio
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="html" id="html6" value="checkbox">
            <label class="form-check-label" for="">
              Opciones de seleccion
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="html" id="html7" value="select">
            <label class="form-check-label" for="">
              Lista desplegable
            </label>
          </div>
        </div>
        
        <div class="form-group">
          <label for="">Opciones de llenado</label>
          <textarea class="form-control" id="opciones_llenado" rows="3"></textarea>
        </div>
          
        <div class="form-group">
          <label for="">Primaria</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="primaria">
            <label class="form-check-label" for="defaultCheck1">
              Llave primaria
            </label>
          </div>
        </div>
        
        <div class="col-auto my-1">
          <button id="boton_crear_campo" type="button" class="btn btn-primary">Adicionar campos +</button>
          <button id="boton_finalizar" type="button" class="btn btn-primary">Finalizar</button>
        </div>
        
      </div>
    </form>
  </body>
</html>