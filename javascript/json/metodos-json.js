
let json = { 
    nombre: 'axel', 
    apellido: 'axel', 
    edad: 26,
    estado: true
    }

// agregar elemetos al json
json.nacionalida = 'guatemalteca'
console.log(json);

// eliminar elementos del json
delete json.nacionalida;
console.log(json);

// obtener el volor de un elemento del json
    // let nombre = json.nombre;
    // console.log( nombre );

// obtner el valor de varios elementos del json
let { apellido, edad } = json;
console.log( apellido + ' ' + edad );


// agregar objeto al objeto
json.universidad = {
    nombreUniversidad: 'Mariano Galvez',
    semestre: 6,
    estudia: true
}

json.trabaja = {
    nombreTrabajo: 'Enigma',
    anios: 3,
}

// agregar otro json a el objeto universidad
json.universidad.clase = {
    nombreClase: 'Quimica',
    creditos: 25
}
console.log(json);

// acceder a un elemento dentro del objeto universidad
let { semestre } = json.universidad;
console.log( semestre );

// aceder al objeto dentro del otro objeto
let { trabaja } = json;
console.log( trabaja );

// acceder atravez de DESTRUCTURING 
let { nombre, universidad, universidad: { nombreUniversidad, clase, clase: { nombreClase } } } = json;
console.log( nombre );
console.log( nombreUniversidad );
console.log( nombreClase );

// unir en un solo objeto dos objetos
let primerObjet = universidad;
let segundObjet = trabaja;

let resultado1 = Object.assign( primerObjet, segundObjet );
console.log( resultado1 );

let resultado2 = [ primerObjet, segundObjet ];
console.log( resultado2 );

// agregar una funcion al objeto
let persona = {
    nombre: 'axel',
    apellido: 'paez',
    mostrarInfo: function (){
        console.log( ` Nombre: ${nombre}, Apellido: ${ apellido}`)
    }
}

// acceder a la funcion
persona.mostrarInfo();

//obtener las llaves del objeto
console.log(Object.keys(persona));

//obtener los valores de las llaves
console.log(Object.values(persona));

//obtener los valores en pares del objeto
console.log(Object.entries(persona));


