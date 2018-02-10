new Vue({
	el: '#crud',
	created: function() {//etapa de creacion
		this.getKeeps();
	},
	data: {
		keeps: []
	},
	methods: {
		getKeeps: function() {
			var urlKeeps = 'tasks';//Esta variable guarda la ruta del index que se puede ver al ejecutar php artisan route:list con nombre tasks.index
			axios.get(urlKeeps).then(response => {//Se usa get porque el metodo de la ruta es get, cuando se vaaya a guardar se usa post. "urlkeeps.then(response =>{00})" se traduce como: si es correcto traemos esas respuestas
				this.keeps = response.data// esta linea se traduce como que: keeps se va a llenar de lo que traigamos en la respuesta.data y este objeto se va a llamar cuando el objeto este en su etapa de creacion
			});
		},
		deleteKeep: function(keep) {
			var url = 'tasks/' + keep.id; //la ruta para eliminar una tarea.  se concatena el id de la tarea a eliminar
			axios.delete(url).then(response => { //ejecutamos el metodo AJAX. OJO: en esta linea nosotros eliminamos el registro y adentro de las llaves del then tenemos que hacer que algo suceda despues de eliminar el registro
				this.getKeeps();//una vez eliminado el registro mostramos nuevamente los elementos en pantalla
			});
		}
	}
});
