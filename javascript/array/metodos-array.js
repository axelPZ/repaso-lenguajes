
let lenguajes = [ 'Java', 'PHP', 'JavaScrip', 'C#' ];

// ver la longitud del array
console.log( lenguajes.length );


// agregar elementos al array
lenguajes.push('Pyton')
console.log( lenguajes );

lenguajes = [ ...lenguajes, 'C' ];
console.log( lenguajes ); 


// agregar elemntos al inicio del array
lenguajes.unshift( 'Ruby' )
console.log(lenguajes);

lenguajes = ['C++', ...lenguajes];
console.log(lenguajes);

// conseguir la posicion de un elemento el array
let posicion = lenguajes.indexOf('C#');
console.log( posicion );

// acceder a un elemento del arreglo
console.log( lenguajes[2] );

// eliminar el primer elemento del array
lenguajes.splice(0,1); // sele colocamos 2 en el segundo parametro nos borrara dos elementos empezando del que le indicamos en el primer parametro
console.log(lenguajes);

// eliminar el ultimo elemento del array
lenguajes.splice( lenguajes.length-1, 1 );
console.log(lenguajes);


// eliminar un elemento por su indice
posicion = lenguajes.indexOf('C#');
lenguajes.splice( posicion, 1);
console.log( lenguajes );

// convertir un array a string
let cadena = lenguajes.toString();
console.log( cadena );


