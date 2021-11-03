<?php
      /*
       * función que calcula el área de un cuadrado
       */
      function calcularAreaCuadrado($lado)
      {
          $area = $lado * $lado;
          return $area;
      }
      /*
       * función que calcula la media
       */
      function calcularMedia3($num1, $num2, $num3)
      {
          return ($num1 + $num2 + $num3) / 3;
      }
            /*
       * función que muestra unmensaje
       */
      function mostrarMensajeh3($mensaje)
      {
         return "<h3>$mensaje</h3>";
         
      }
      /*
       * función que muestra una línea horizontal
       */
      function mostrarLinHorizontal()
      {
         return "<hr />";
      }
?>