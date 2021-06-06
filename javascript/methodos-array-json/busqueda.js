// array 
const array = [ 'Java', 'PHP', 'JavaScrip', 'C#' ];

// array de json
let jsonArray = [
    { nombre: 'axel', apellido: 'paez', edad: 26, estado: true},
    { nombre: 'leidi', apellido: 'morales', edad: 20, estado: true},
    { nombre: 'carlos', apellido: 'gonzales', edad: 13, estado: true},
    { nombre: 'estuardo', apellido: 'barillas', edad: 33, estado: true},
    { nombre: 'kevin', apellido: 'pineda', edad: 53, estado: true}
]

// json
const obj = {
    nombre: 'axel',
    apellido: 'paez', 
    edad: 26,
    estado: true
}

    // include()
        // array
        let respuesta = array.includes('Java'); // retorna true si lo encuentra y false si no lo encuentra
        console.log(respuesta);


    // some()
        // array
        respuesta = array.some( lenguaje => lenguaje === 'PHP');// retorna true si lo encuentra y false si no lo encuentra
        console.log(respuesta);

        // array de json
        respuesta = jsonArray.some( obj => obj.apellido === 'axel');// retorna true si lo encuentra y false si no lo encuentra
        console.log( respuesta );

    // findIndex()
        // array
        respuesta = array.findIndex( lenguaje => lenguaje === 'as');// retorna el indice y -1 si no lo encuentra
        console.log(respuesta);

        // array de json
        respuesta = jsonArray.findIndex( obj => obj.apellido === 'paez');// etorna el indice y -1 si no lo encuentra
        console.log( respuesta );

    // find()
     // array de json
     respuesta = jsonArray.find( obj => obj.apellido === 'paez');// retorna el objeto donde encuentra la primera coincidencia
     console.log( respuesta );


