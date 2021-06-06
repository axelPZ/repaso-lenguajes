<?php

$lenguajes = [ 'Java', 'PHP', 'JavaScrip', 'C#' ];

// ver la longitud del array
echo sizeof( $lenguajes );
echo "</br>";

// agregar elementos al array
$lenguajes[] = 'Pyton'; 
print_r( $lenguajes );
echo "</br>";

// para agregar varios elementos a la vez
array_push( $lenguajes, 'Pyton', 'C' );
print_r( $lenguajes );
echo "</br>";

// agregar al inicio del array
array_unshift($lenguajes, 'Ruby');
print_r( $lenguajes );
echo "</br>";

// conseguir la posicion de un elemento del array
$posicion = array_search( 'C#', $lenguajes );
echo $posicion;
echo "</br>";

// acceder a un elemento de arreglo
echo $lenguajes[2];
echo "</br>";

// eliminar el primer elemeto de un array
array_shift( $lenguajes );
print_r( $lenguajes );
echo "<br/>";

// eliminar el ultimo elemento de un array
array_pop( $lenguajes );
print_r( $lenguajes );
echo "<br/>";

// eliminar un elemento por su indice
$posicion = array_search( 'C#', $lenguajes );
unset( $lenguajes[$posicion]);
print_r( $lenguajes );
echo "<br/>";

// converitr un array a string
$cadena = implode( ",", $lenguajes );
echo $cadena;

?>