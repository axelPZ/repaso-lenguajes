
// saver el tamanio de la cadena
const palabra = 'repaso';
console.log( palabra.length );

// convertir a binario
numero = 2132;
let resultado = numero.toString(2);
console.log(resultado);

// convertir de binario decimal
numero = 100001010100;
resultado = parseInt(numero,2);
console.log(resultado);


// dividir en caracteres el string
resultado = palabra.split('');
console.log(resultado);

// dividir por comas el string
const texto = 'JavaScript, PHP, Java, css3, Html5';
resultado = texto.split(',');
console.log(resultado);

// quitar el primer caracter del string
resultado = palabra.slice(1);
console.log(resultado);

// quitar el ultimo caracter del string
resultado = palabra.slice(0,palabra.length-1);
console.log(resultado);

// extraer ' pa ' de ' repaso ' 
resultado = palabra.substring(2,4);
console.log(resultado);

// quitar ' e ' de ' repaso ' con expresion regular
resultado = palabra.replace(/e/g,'');
console.log(resultado);

// concatener al final
resultado = palabra + ' de javascript';
console.log(resultado);

// concatenar al inicio
resultado = 'javascript ' + palabra;
console.log(resultado);

// quitar espacios al inicio
const textoEspacios = ' repaso de javascript ';
resultado = textoEspacios.trimStart();
console.log(resultado);

// quitar espacios al final
resultado = textoEspacios.trimEnd();
console.log( resultado );

// quitar los espacios al final y al principio
resultado = textoEspacios.trim();
console.log(resultado);

// quitar todos los espacios del texto
resultado = textoEspacios.replace(/ /g,'');
console.log(resultado);

// buscar la letra ' s ' si la encuentra TRUE de lo contrario FALSE
 resultado = palabra.includes('s');
 console.log(resultado);

 // buscar java en 'repaso javascript
 resultado = textoEspacios.includes('java');
 console.log(resultado);