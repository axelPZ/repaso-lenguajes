// array de json
let jsonArray = [
    { nombre: 'axel', apellido: 'paez', edad: 26, estado: true},
    { nombre: 'leidi', apellido: 'morales', edad: 20, estado: true},
    { nombre: 'carlos', apellido: 'gonzales', edad: 13, estado: true},
    { nombre: 'estuardo', apellido: 'barillas', edad: 33, estado: true},
    { nombre: 'kevin', apellido: 'pineda', edad: 53, estado: true}
]


    // reduce()
        // array de json
        let respuesta = jsonArray.reduce( ( total, json ) => total + json.edad, 0 ); // suma todas las edades y le indicamos que enpieze en 0
        console.log( respuesta );
