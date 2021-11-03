<?php

// 1º Admin: Inicio proyecto 
include "helper/funciones.php";

// 2º Colaborador: incluir la función calcularArea() con la rama: funccalculararea
$resultado = "<h3>Cálculo del área de un cuadrado</h3>";
$lado = 7;
$area = calcularAreaCuadrado($lado); 
$resultado .= "<p>El &aacute;rea de un cuadrado de lado $lado es $area</p>";


// 3º Admin:incluir la función calcularMedia3() con la rama: funccalcularmedia
$resultado.= "<h3>La media de 8, 12 y 25 es ".calcularMedia3(8, 12, 25)."</h3>"; 

$resultado .= mostrarMensajeh3("Ejemplo de función sin valor de retorno"); 
$resultado.= mostrarLinHorizontal(); 


include "vistas/vista_resultado.php";
