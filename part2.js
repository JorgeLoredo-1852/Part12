let personas = [
{ nombre: "Juan", edad: 30 },
{ nombre: "Ana", edad: 25 },
{ nombre: "Pedro", edad: 35 },
{ nombre: "María", edad: 28 },
{ nombre: "Pepe", edad: 25}
];

function ordenarPorPropiedad(array, key){
    if (array.length <= 1) { 
		return array;
	} else {

		let l = [], r = [];		
		let pivot = array.pop();

		for (let i = 0; i < array.length; i++) {
            //console.log(array[i][key], pivot[key])
			if (array[i][key] <= pivot[key]) {
				l.push(array[i]);
			} else {
				r.push(array[i]);
			}
		}

        let newArray = [];
        newArray = newArray.concat(ordenarPorPropiedad(l, key), pivot, ordenarPorPropiedad(r, key))
		return newArray;
	}
}

let personasOrdenadas = ordenarPorPropiedad(personas, "edad");
console.log(personasOrdenadas)
