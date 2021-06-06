// array de json
let jsonArray = [
    { nombre: 'axel', apellido: 'paez', edad: 26, estado: true},
    { nombre: 'leidi', apellido: 'morales', edad: 20, estado: true},
    { nombre: 'carlos', apellido: 'gonzales', edad: 13, estado: true},
    { nombre: 'estuardo', apellido: 'barillas', edad: 33, estado: true},
    { nombre: 'kevin', apellido: 'pineda', edad: 53, estado: true}
]

    // filter()
    let respuesta = jsonArray.filter( obj => obj.edad > 18);// me devuelbe un nuevo arreglo solo con los que cumplen las condiciones
    console.log( respuesta );

    // util a la  hora de eliminar
    // vamos a eliminar el objeto que tenga como nombre = 'axel' 
    respuesta = jsonArray.filter( obj => obj.nombre !== 'axel');
    console.log( respuesta );