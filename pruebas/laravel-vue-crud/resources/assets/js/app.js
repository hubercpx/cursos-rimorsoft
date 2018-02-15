new Vue({
	el: '#crud',
	created: function() {//etapa de creacion
		this.getKeeps();
	},
	data: {
		keeps: [],
		newKeep: "",
		errors: []
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
				toastr.success('Eliminado correctamente');// mensaje de eliminado correctamente
			});
		},
		createKeep: function() {
			var url = 'tasks';
			axios.post(url,{ //los parametros que vienen desde la vista
				keep:this.newKeep //lo que tenemos en la caja de texto, estas variables las tenemos que dar de alta en la llave data
			}).then(response => {
				this.getKeeps(); //traemos los datos de nuevo y de esa manera podemos ver el nuevo registro creado
				this.newKeep = ''; //Para que vuelva a poner la caja de texto sin ningun valor
				this.errors = []; //para que vuelva a 0 los errores
				$('#create').modal('hide'); //para desaparecer la ventana modal
				toastr.success('Nueva tarea creada con exito');
			}).catch(error => { //si las cosas salen mal, hacer lo siguiente
				this.errors = error.response.data //mostrar errores
			});
		}
	}
});
