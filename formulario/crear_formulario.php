<?php
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
      $("#boton_crear_formulario").click(function(){
        if(confirm('Esta seguro de crear este formato?')){
          var x_nombre = $("#nombre").val();
          var x_etiqueta = $("#etiqueta").val();
          
          $.ajax({
            url : "acciones.php",
            data : {
              ejecutar : 'insertar_formulario',
              nombre : x_nombre,
              etiqueta : x_etiqueta
            },
            type : "POST",
            dataType: "json",
            success : function(html){
              if(html.exito == 1){
                $.notify(html.mensaje,"success");
                
                
                $(".nav-link" , window.parent.document).removeClass("active");
                $("#boton_crear_campo" , window.parent.document).addClass("active");
                
                window.open("../campo/crear_campo.php?idformulario=" + html.idformulario,"_self");
              }else{
                $.notify(html.mensaje,"warning");
              }
            }
          });
        }
      });
    });
    </script>
  </head>
  <body>
    <form>
      <div id="container" class="container">
        <legend>Crear formulario</legend>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Etiqueta</label>
          <input type="text" class="form-control" id="etiqueta" placeholder="">
        </div>
        <div class="col-auto my-1">
          <button id="boton_crear_formulario" type="button" class="btn btn-primary">Crear</button>
        </div>
      </div>
    </form>
  </body>
</html>