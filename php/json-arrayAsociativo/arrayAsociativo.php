<?php

$arrayAsociativo = [ 'nombre'=>'axel', 'apellido'=>'paez', 'edad'=> 26, 'estado' => true];

// agregar elementos al array
$nacionalidad = 'guatemalteca';
$arrayAsociativo[ 'nacionalidad' ] = 'guatemalteca';
print_r($arrayAsociativo);
echo "<br/>";


// eliminar el primer elemento del array
array_shift( $arrayAsociativo );
print_r($arrayAsociativo);
echo "<br/>";

// eliminar el ultimo elemento de un array
array_pop( $arrayAsociativo );
print_r( $arrayAsociativo );
echo "<br/>";

// eliminar un elemento por su indice
unset( $arrayAsociativo['edad']);
print_r( $arrayAsociativo );
echo "<br/>"; 

// editar elemento del array
$arrayAsociativo['apellido']='barrera';
print_r( $arrayAsociativo );

// mostrar solo las llaves del array
print_r(array_keys( $arrayAsociativo ));
echo "<hr>";

//mostrar solo los valore
print_r(array_values( $arrayAsociativo ));

echo "<hr>";

?>
