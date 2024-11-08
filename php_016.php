<?php 
//CADENAS. Su posicion inicial siempre es 0.
//FUNCIONES:
//La mayoria van a empezar por strlen(): Devuelve la posición de una cadena.
//strtolower(): convierte toda la cadena a minúscula.
//strtiupper(): convierte toda la cadena a mayúsculas.
//strcmp(): compara dos cadebas (distingue entre mayúsculas y minúsculas).
//strcasecmp(): Compara dos cadenas  (no distingue entre mayúsculas y minúsculas).
//substr(): extraer una parte de la cadena.
//str_repeat(): repite una cadena el número de veces que se exoecifican.
//trim(): eliminar los espacion en blanco al principio y al final de una cadena.
//str_word_count(): cuenta las palabras de una cadena de texto.
//strrev(): invierte una cadena de texto, si es hola, sería aloh.
//strpos(): busca un texto dentro de una cadena y devuelve su posición.
//str_replace(): reemplaza unos caracteres por otros

//Asignar "Hola Mundo!" a una variable
$texto = "Hola Mundo!";

//Contamos el numero de plabras
echo "Número de palabras de $texto: ".str_word_count($texto)."<br>";

//Invertir la cadena
echo "La cadena invertida de $texto es: ".strrev($texto)."<br>";

//Buscar el texto "Mundo" dentro de la cadena
echo "La posición de 'Mundo': ".strpos($texto,"Mundo")."<br>";

//Reemplazar la cadena "Mundo" por "Dolly"
echo "Reemplazo de 'Mundo' por 'Dolly':".str_replace("Mundo","Dolly", $texto)."<br>";

//Longitud de una cadena
echo "Longitud de la cadena '$texto': ".strlen($texto)."<br>";

//Pasar a minúsculas 
echo "Cadena en minúsculas: ".strtolower($texto)."<br>";

//Pasar a mayúsculas
echo "Cadena en minúsculas: ".strtoupper($texto)."<br><br>";

//Comparar cadenas sensibles mayúsculas y minúsculas
echo "Comparación de 'Hola' y 'hola': ".strcmp("Hola","hola")."<br>";

//Comparar cadenas insensibles mayúsculas y minúsculas
echo "Comparación de 'Hola' y 'hola': ".strcasecmp("Hola","hola")."<br><br>";

//Extraer 5 caracteres a partir del carácter 5.
echo "Subcadena de $texto: ".substr($texto,5,3)."<br>";

//Repetir una cadena
echo "Repetir la cadena 'Hola' 3 veces: ".str_repeat("Hola ",3)."<br>";
 
//Eliminar espacios en blancos
echo "Cadena con espacios eliminados:".trim("      $texto        ");
?>