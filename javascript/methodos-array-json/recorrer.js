
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


    // recorrer 
        // for
        console.log('-----------------------------FOR--------------------------------');

            // array
            for (let i = 0; i < array.length; i++) {
                console.log( array[i] );
            }

            // array json
            for (let i = 0; i < jsonArray.length; i++) {
                console.log( jsonArray[i].nombre);
                console.log( jsonArray[i].apellido);
                console.log( jsonArray[i].edad);
                console.log( jsonArray[i].estado);
            }
       
        // foreach
        console.log('---------------------------FOREACH----------------------------------');

            // array
            array.forEach((element, i )=> {
                console.log( `${i}.) ${element}`);
            });


            // array json
            jsonArray.forEach( persona => {
                console.log( `Nombre: ${ persona.nombre }, Apellido ${ persona.apellido }, edada ${ persona.edad }`)
            });

        // forOF
        console.log('----------------------------FOROF-------------------------------');

            // array    el forOf solo interactua en arreglos
            for (const i of array ) {
                console.log( i );
            }


            // array json
            for (const elemento of jsonArray) {
                console.log( `nombre: ${ elemento.nombre }, elemento: ${ elemento.apellido }`)
            }
        // forIn
        console.log('----------------------------FORIN-------------------------------');
            
            //  json   el forIn solo interactua sobre  objetos
            const obj = {
                nombre: 'axel',
                apellido: 'paez', 
                edad: 26,
                estado: true
            }

            for (const llave in obj) {
                if (Object.hasOwnProperty.call(obj, llave)) 
                {
                    console.log( llave );
                }
            }




