<?php
require_once 'vendor/autoload.php';
include_once ('librerias.php');

echo(bootstrap_css());
echo(jquery_js());
echo(notificacion());
?>
<html>
  <head>
    <script>
    $(document).ready(function(){
      var alto_documento=$(document).height();
      $("#iframe_crear_formulario").height(alto_documento-100);
      
      $(".nav-link").click(function(){
        var boton=$(this).attr("id");
        
        if(boton == 'boton_crear_formulario'){          
          $("#iframe_crear_formulario").attr("src","formulario/crear_formulario.php");
          
          $(".nav-link").removeClass("active");
          $(this).addClass("active");
        }
        if(boton == 'boton_crear_campo'){          
          $("#iframe_crear_formulario").attr("src","campo/crear_campo.php");
          
          $(".nav-link").removeClass("active");
          $(this).addClass("active");
        }
      });
    });
    </script>
  </head>
  <body>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" id="boton_crear_formulario" href="#">Crear formulario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="boton_crear_campo" href="#">Crear campos</a>
      </li>
      <!--li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li-->
    </ul>
    
    <div id="capa_crear_formulario" style="" class="">
      <iframe id="iframe_crear_formulario" name="iframe_crear_formulario" style="width:100%;height:100%;" border="0px" frameborder="0" src="formulario/crear_formulario.php"></iframe>
    </div>
  </body>
</html>