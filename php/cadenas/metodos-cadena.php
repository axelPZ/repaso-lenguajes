<?php

// saver el tamanio de la cadena
$palabra = 'repaso';
echo strlen($palabra);
echo "<br/>";

// convertir de binario a entero
$numero = 11000000011000;
echo bindec($numero);
echo "<br/>";

// convertir de entero a binario
echo decbin($numero);
echo "<br/>";

// dividir en caracteres el string
var_dump( str_split( $palabra ) );
echo "<br/>";

// dividir por comas el string
$texto = 'JavaScript, PHP, Java, css3, Html5';
var_dump( explode( ',', $texto ));
echo "<br/>";

// quitar el primer caracter del string
echo substr( $palabra, 1, strlen( $palabra ));
echo "<br/>";

// quitar el ultimo caracter del string
echo substr( $palabra, 0, strlen( $palabra )-1);
echo "<br/>";

// extraer ' pa ' de ' repaso '
echo substr( $palabra, -4, 2);
echo "<br/>";

// quitar ' e ' de ' repaso '
echo str_replace( 'e', '', $palabra );
echo "</br>";

// al str_replace se le puede enviar un array de lo que queremos quitar
$vocales = array ('a','e','i','o','u') ;
echo str_replace( $vocales, '', $palabra );
echo "</br>";

// concatener al final
echo $palabra . ' de php';
echo "</br>";

// concatenar al principio
echo 'php ' . $palabra;
echo "</br>";

// quitar espacios al inicio
$textoEspacios = ' repaso de php ';
echo ltrim( $textoEspacios, ' '); // ltrim() eliminal al principio lo que le indiquemos
echo "</br>";

// quitar espacios al final
echo rtrim( $textoEspacios, ' ' ); // ltrim() eliminal al final lo que le indiquemos
echo "</br>";

// quitar los espacios al final y al principio
echo trim( $textoEspacios );
echo "</br>";

// quitar todos los espacios del texto
echo str_replace( ' ', '', $textoEspacios );
echo "</br>";

// buscar la letra ' s ' si la encuentra manda la posicion de lo contrario es vacio o null
echo strpos( $palabra, 's' );
echo "</br>";

 // buscar php en 'repaso de php
 echo strpos( $textoEspacios, 'php');


 
?>