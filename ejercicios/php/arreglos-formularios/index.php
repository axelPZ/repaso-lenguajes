<?php
    
    // VARIABLES
    $archivo = 'data/data.json';
    $datos = leerJSON( $archivo );
    $user = [];



    // AGREGAR USUARIO
    if( isset( $_POST['agregarUsuario'] ) ){

        if( validarCampos( $_POST['name'] ) && validarCampos( $_POST['surname'] )  && validarCampos( $_POST['email'] ) || validarCampos( $_POST['age'] ) || $_POST['sexo'] <= 0){
           
            $data = convertirArray(  $id = date("Ymd-his"), $_POST['name'], $_POST['surname'], $_POST['age'], $_POST['email'], addSexo( $_POST['sexo'] ) );
            actualizarData( $archivo, $data, $datos );
            $datos = leerJSON( $archivo );
        }
    }


    // ELIMINAR USUARIO
    if( isset( $_REQUEST['id'] ) ){

        $id = $_REQUEST['id'];
        if( buscarUser( $id, $datos )){

            $datos = deleteUser( $id, $datos );
            actualizarData( $archivo, '', $datos );
            $datos = leerJSON( $archivo );
        }
    }



    // EDITAR USUARIO
    if( isset( $_POST['editarUsuario'] ) ){
        
        if( validarCampos( $_POST['id'] ) && validarCampos( $_POST['name'] ) && validarCampos( $_POST['surname'] )  && validarCampos( $_POST['email'] ) || validarCampos( $_POST['age'] ) || $_POST['sexo'] <= 0){
           
            $data = convertirArray(  $_POST['id'], $_POST['name'], $_POST['surname'], $_POST['age'], $_POST['email'], addSexo( $_POST['sexo'] ) );
            $datos = deleteUser( trim( $_POST['id'] ), $datos );
            actualizarData( $archivo, '', $datos );
            actualizarData( $archivo, $data, $datos );

            $datos = leerJSON( $archivo );
            header( 'Location: index.php');

            }
    }



    // LLENAR EL FORMULARIO CON LOS DATOS DEL USUARIO QUE QUEREMOS EDITAR
    if( isset( $_REQUEST['idUpdate'] ) ){

        $id = $_REQUEST['idUpdate'];
        $user = buscarUser( $id, $datos);
        $datos = leerJSON( $archivo );
    }



    // Leer archivo .json y se agrega a un arrayDimensional
   function leerJSON( $archivo ):array {
    $archivo = file_get_contents( $archivo );
    $users = json_decode( $archivo, true);
    return $users;
   }
    


    // actualiza el archivo .json si se envia el segunda argumento guarda el usuario y si no solo actualiza
   function actualizarData( $archivo, $data, $datos) {

    if( $data != ''){
        array_push( $datos, $data );
    }
    $datos = json_encode( $datos );
    file_put_contents($archivo, $datos);
   } 



    // regresa un arreglo, sin el usuario al cual queremos eliminar
   function deleteUser( $id, $data ){

    $newArray = [];

    foreach( $data as $user){
        if( $user['id'] != $id ){
            array_push( $newArray, $user );
        }
    }
    return $newArray;
   }



    // nos devuelve el usuario que coincida con el id que le enviemos 
   function buscarUser( $id, $data ){
       
    $newArray = [];
    foreach( $data as $user){
        if( $user['id'] == $id ){
           return $user;
            break;
        }
    }
    return $user;
   }



    // convierte en un arreglo los datos que enviamos
    function convertirArray( $id, $name, $surname, $age, $email, $sexo ){

        $id = date("Ymd-his");
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $sexo = addSexo( $_POST['sexo'] );

        $data = array ( 'id' => $id, 'name' => $name, 'surname' => $surname, 'age' => $age, 'email' => $email, 'sexo' => $sexo );
        return $data;
    }




   // valida los campos, para verificar que si nos los estan enviando 
   function validarCampos( $value ){
    if( !isset( $value ) || strlen(  $value ) <= 0 ){
        echo ' Error, por favor llenar todos los campos';
        return false;
    }
    return true;
   }




   // recive un numero y deacuerdo con este devuelve el tipo de sexo
   function addSexo( $sexo ):string {

    switch ( $sexo ) {
        case '1':
                $sexo = 'Hombre';
            break;
        case '2':
                $sexo = 'Mujer';
            break;
        default:
                $sexo = 'None';
            break;
    }
    return $sexo;
   }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">

    <title>CRUD Archivo .JSON</title>
</head>
<body>
    
    <div class="contenido centrado-columna "> 

        <div class="principal sombra">

            <!-- FORMULARIO -->
            
            <div class="formulario centrado-columna">
                <h3>Agregar usuario</h3>

                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="centrado-columna">

                    <?php if( isset( $user['id'] ) ): ?>
                        <input type="hidden" name='id' value=" <?php echo $user['id']?>">
                    <?php endif; ?>

                    <div class="izquierda-columna">
                        <label for="name">Nombre:</label>
                        <input type="text" name='name' value="<?php echo  ( isset( $user['name'] ) ) ? $user['name'] : ''?>" class="campos" >
                    </div>
                    <div class="izquierda-columna">
                        <label for="surname">Apellido:</label>
                        <input type="text" name='surname' value="<?php echo  ( isset( $user['surname'] ) ) ? $user['surname'] : ''?>" class="campos" >
                    </div>
                    <div class="izquierda-columna">
                        <label for="age">Edad</label>
                        <input type='number' name='age' value="<?php echo  ( isset( $user['age'] ) ) ? $user['age'] : ''?>" class="campos" >
                    </div>
                    <div class="izquierda-columna">
                        <label for="email">Correo Electronico:</label>
                        <input type="email" name='email' value="<?php echo  ( isset( $user['email'] ) ) ? $user['email'] : ''?>" class="campos" required>
                    </div>
                    <div class="izquierda-columna" >
                        <label for="name">Sexo:</label>
                        <select name='sexo' class="campos">
                            <option value="0">Sexo</option>
                            <option value="1">Hombre</option>
                            <option value="2">Mujer</option>
                        </select>
                    </div>

                    <?php if( sizeof( $user ) === 0 && isset( $user ) ): ?>
                        <button type="submit" name='agregarUsuario' class="btn btn-agregar">Agregar</button>
                    <?php else: ?>
                        <input type="submit" name='editarUsuario'  class="btn btn-editar" value="Editar">
                        <?php endif; ?>
                </form>
            </div>

            <!-- LISTA DE USUARIOS -->
            <div class="lista-usuarios centrado-columna">
            <?php if( sizeof( $datos ) != 0 ):?>
                <h3>Usuarios</h3>
                    <table>

                        <thead>
                            <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th></th>
                            <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach( $datos as $dato):?>
                                <tr>
                                    <td><?php echo $dato['name'];?></td>
                                    <td><?php echo $dato['surname'];?></td>
                                    <td><?php echo $dato['email'];?></td>
                                    <td><?php echo $dato['sexo'];?></td>
                                    <td><?php echo $dato['age'];?></td>
                                    <td>  <a href="index.php?id=<?php echo $dato['id'] ?>" class=" btn btn-eliminar" >Eliminar </a></td>
                                    <td>  <a href="index.php?idUpdate=<?php echo $dato['id'] ?>" class=" btn btn-editar" >Editar </a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                <?php endif; ?>

            </div>
        </div>
    </div>
</body>
</html>