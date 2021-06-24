<?php

$archivo = 'info.TXT';

if( file_exists( $archivo ) && is_file( $archivo ) ){
    
    $archivo = file('info.TXT');
    $producto = 'NONE';

    foreach( $archivo as $linea){

        if( strstr($linea, 'FILES MGMNT') ){
            
            $info = explode( '-', $linea);
            $producto = trim( $info[6] );

             // extraer el producto 
             $extProduct = array('PROD[',']');
             $producto = trim(str_replace( $extProduct, '', $producto ));

             switch ($producto) {
                 case '1':
                    $producto = "SUPER";
                    break;
                case '2':
                    $producto = "REGULAR";    
                    break;
                case '3':
                    $producto = "DIESEL";        
                    break;
                 
                 default:
                    $producto = "NONE";
                     break;
             }
          
        }else if( strstr($linea, 'PROCESS END STATE - SALE') ){

             $linea = trim( $linea );
             $linea = str_replace( '- [002024] - PROCESS END STATE', '', $linea );
             $palabras = explode( '-', $linea );
             
             // extraer la fecha
             $fecha = trim( $palabras[0] );
             $fecha = trim ( substr( $fecha, 0, 8 ) );
 
             $palabras = explode(' ',$palabras[1]);
             
             // extraer el monto
             $sale = extraerData( trim($palabras[1]), array('SALE[',']$') );
 
             // extraer los galones
             $vol = extraerData( trim($palabras[2]), array('VOL[',']') );
             
             // extraer el precio de venta
             $ppu = extraerData( $palabras[3], array('PPU[',']'));   
 
             // extraer la bomba
             $pump = extraerData( $palabras[4], array('PUMP[',']'));
 
             // extraer la mangera
             $hose = extraerData( $palabras[5], array('HOSE','[',']'));
             $hoses = str_split( $hose );
             $hose = trim($hoses[0]);

             $newData = array('fecha' => $fecha,'monto' => $vol, 'galones' => $vol, 'precioVenta' => $ppu, 'bomba' => $pump, 'mangera' => $hose, 'producto' => $producto );
             var_dump( $newData);
            
             // agregar a la base de datos
            addDB( $newData );    
        }
    }
}else{
    echo "no existe tal archivo";
}


// funcion para extaer los datos
function extraerData( string $palabra, array $dataExt): string {
    return trim(str_replace( $dataExt, '', $palabra ));
}

// insertar a la base de datos
function addDB( array $data ){
    
    $pdo = conectionDB();
    $stm = $pdo->prepare("INSERT INTO VENTAS (monto, galones, precio_venta, bomba, mangera, producto) VALUES(?,?,?,?,?,?)");
    $stm->execute( array( $data['monto'], $data['galones'], $data['precioVenta'], $data['bomba'], $data['mangera'], $data['producto']));
}

// funcion para conectar a la BD
function conectionDB(){
    try{
        $pdo = new PDO("mysql: host=localhost; dbname=leer_archivo; charset=utf8mb4", 'root', '47293202axel');
        $pdo->setAttribute(  PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $pdo;

    }catch( PDOException $error){
        echo "ERROR, al conectar a la base de datos <br/>";
        echo $error->getMessage();
    }
}
?>