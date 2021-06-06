// array de json
let jsonArray = [
    { nombre: 'axel', apellido: 'paez', edad: 26, estado: true},
    { nombre: 'leidi', apellido: 'morales', edad: 20, estado: true},
    { nombre: 'carlos', apellido: 'gonzales', edad: 13, estado: true},
    { nombre: 'estuardo', apellido: 'barillas', edad: 33, estado: true},
    { nombre: 'kevin', apellido: 'pineda', edad: 53, estado: true}
]

    // every()
    let respuesta = jsonArray.every( obj => obj.edad > 18);// me devuelbe  false porque la condicion no se cumple en todos los objetos del arreglo
    console.log( respuesta );

