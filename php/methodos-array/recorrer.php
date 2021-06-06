<?php

// array indexsado
$arrayIndice = [ 'Java', 'PHP', 'JavaScrip', 'C#' ];

// array asociativo 
$arrayAsociativo = [ 'nombre' => 'axel', 'apellido' => 'paez', 'edad' => 26, 'estado' => true];

// array Dimensional
$arrayDimensional = [
    [ 'nombre' => 'axel', 'apellido' => 'paez', 'edad' => 26, 'estado' => true],
    [ 'nombre' => 'leidi', 'apellido' => 'morales', 'edad' => 20, 'estado' => true],
    [ 'nombre' => 'carlos', 'apellido' => 'gonzales', 'edad' => 13, 'estado' => true],
    [ 'nombre' => 'estuardo', 'apellido' => 'barillas', 'edad' => 33, 'estado' => true],
    [ 'nombre' => 'kevin', 'apellido' => 'pineda', 'edad' => 53, 'estado' => true ]
];

 // recorrer
        // for    
        echo '---------------------------------------------- FOR ------------------------------</br>';
            // indexsadp
            for( $i=0; $i < sizeof( $arrayIndice ); $i++){

                echo "$arrayIndice[$i]";
                echo "<br/>";
            } 

        
        // foreach
        echo '---------------------------------------------- FOREACH ------------------------------</br>';
            // indexsado
            foreach( $arrayIndice as $indice ){
                echo $indice;
                echo "<br/>";
            }

            echo "</br>";
            echo "</br>";
            echo "</br>";

            // asociativo
            //foreach( $arrayAsociativo as $llave ){ //solo el valor
            foreach( $arrayAsociativo as $llave => $valor){ //valor y la llave
                echo $llave . ' : ' . $valor;
                echo "</br>";
            }

            echo "</br>";
            echo "</br>";
            echo "</br>";

            // dimensional
            foreach( $arrayDimensional as $elemento ){
                echo 'Nombre: '. $elemento['nombre'] . ' ------- Apellido: '.$elemento['apellido'];
                echo "</br>";
            }

            echo "</br>";
            echo "</br>";
            echo "</br>";
            
            // dimensional 
            foreach ($arrayDimensional as $key => $value) 
            {
                echo  "<br/>".$key. " => ";
                foreach ($value as $llave => $valor) 
                {
                     echo $llave ." = " .  $valor . "  ";
                }
            }

?>