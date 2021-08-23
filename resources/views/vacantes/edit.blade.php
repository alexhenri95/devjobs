@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
@endsection

@section('navegacion')
	@include('ui.navAdmin')
@endsection

@section('content')
	<h1 class="text-2xl text-gray-900 text-center mt-10">Editar vacante: {{$vacante->titulo}}</h1>

	<form action="{{route('vacantes.update', $vacante->id)}}" method="POST" class="max-w-lg mx-auto my-10">
		@csrf
		@method('PUT')
		
		<div class="flex flex-wrap mb-5">
			<label for="titulo" class="block text-gray-700 text-sm mb-2">Título Vacante:</label>
			<input id="titulo" type="text" class="p-2 bg-gray-400 rounded form-input w-full @error('titulo') border-red-500 border @enderror" name="titulo" value="{{$vacante->titulo}}"  autocomplete="titulo" autofocus>

            @error('titulo')
	            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
		</div>

		<div class="flex flex-wrap mb-5">
			<label for="categoria" class="block text-gray-700 text-sm mb-2">Categoría:</label>
			<select name="categoria" id="categoria" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-400">
				<option value="" disabled selected>Seleccione una categoría...</option>
				@foreach($categorias as $categoria)
					<option value="{{$categoria->id}}" {{$vacante->categoria->id == $categoria->id ? 'selected':''}}>{{$categoria->nombre}}</option>
				@endforeach
			</select>

            @error('categoria')
                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>

		<div class="flex flex-wrap mb-5">
			<label for="experiencia" class="block text-gray-700 text-sm mb-2">Experiencia:</label>
			<select name="experiencia" id="experiencia" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-400">
				<option value="" disabled selected>Seleccione la experiencia...</option>
				@foreach($experiencias as $experiencia)
					<option value="{{$experiencia->id}}" {{$vacante->experiencia->id == $experiencia->id ? 'selected':''}}>{{$experiencia->nombre}}</option>
				@endforeach
			</select>

            @error('experiencia')
                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>

		<div class="flex flex-wrap mb-5">
			<label for="ubicacion" class="block text-gray-700 text-sm mb-2">Ubicación:</label>
			<select name="ubicacion" id="ubicacion" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-400">
				<option value="" disabled selected>Seleccione la ubicacion...</option>
				@foreach($ubicaciones as $ubicacion)
					<option value="{{$ubicacion->id}}" {{$vacante->ubicacion->id == $ubicacion->id ? 'selected':''}}>{{$ubicacion->nombre}}</option>
				@endforeach
			</select>

            @error('ubicacion')
                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>

		<div class="flex flex-wrap mb-5">
			<label for="sueldo" class="block text-gray-700 text-sm mb-2">Sueldo:</label>
			<select name="sueldo" id="sueldo" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-400">
				<option value="" disabled selected>Seleccione el sueldo...</option>
				@foreach($sueldos as $sueldo)
					<option value="{{$sueldo->id}}" {{$vacante->sueldo->id == $sueldo->id ? 'selected':''}}>{{$sueldo->nombre}}</option>
				@endforeach
			</select>

            @error('sueldo')
                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>

		<div class="flex flex-wrap mb-5">
			<label for="descripcion" class="block text-gray-700 text-sm mb-2">Descripción del cargo:</label>
			<div class="editable p-3 bg-white rounded form-input w-full"></div>
			<input type="hidden" name="descripcion" id="descripcion" value="{{$vacante->descripcion}}">

			@error('descripcion')
                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>

		<div class="mb-5">
			<label for="imagen" class="block text-gray-700 text-sm mb-2">Imagen:</label>
			<div class="dropzone rounded bg-gray-100" id="dropzoneDevJobs"></div>
			<input type="hidden" name="imagen" id="imagen" value="{{$vacante->imagen}}">

            @error('imagen')
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
			<p id="error"></p>
		</div>

		<div class="flex flex-wrap mb-5">
			<label for="skills" class="block text-gray-700 text-sm mb-2">Habilidades y conocimientos <span class="text-xs">(Elige al menos 3)</span>:</label>
			@php
			    $skills = ['HTML5', 'CSS3', 'CSSGrid', 'Flexbox', 'JavaScript', 'jQuery', 'Node', 'Angular', 'VueJS', 'ReactJS', 'React Hooks', 'Redux', 'Apollo', 'GraphQL', 'TypeScript', 'PHP', 'Laravel', 'Symfony', 'Python', 'Django', 'ORM', 'Sequelize', 'Mongoose', 'SQL', 'MVC', 'SASS', 'WordPress', 'Express', 'Deno', 'React Native', 'Flutter', 'MobX', 'C#', 'Ruby on Rails']
			@endphp
			<lista-skills :skills="{{json_encode($skills)}}" :oldskills="{{ json_encode($vacante->skills) }}"></lista-skills>

			@error('skills')
                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>

		<button type="submit" class="bg-indigo-500 w-full hover:bg-indigo-600 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase font-bold text-sm cursor-pointer">Editar vacante</button>

	</form>
@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js" integrity="sha512-5D/0tAVbq1D3ZAzbxOnvpLt7Jl/n8m/YGASscHTNYsBvTcJnrYNiDIJm6We0RPJCpFJWowOPNz9ZJx7Ei+yFiA==" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js" integrity="sha512-llCHNP2CQS+o3EUK2QFehPlOngm8Oa7vkvdUpEFN71dVOf3yAj9yMoPdS5aYRTy8AEdVtqUBIsVThzUSggT0LQ==" crossorigin="anonymous"></script>

	<script>
		Dropzone.autoDiscover = false;
		document.addEventListener('DOMContentLoaded', () => {
			//Medium editor
			const editor = new MediumEditor('.editable', {
				toolbar : {
					buttons: ['bold','italic','underline','quote','justifyLeft','justifyCenter','justifyRight','justifyFull','orderList','unorderedList', 'h2','h3'],
					static: true,
					sticky: true
				},
				placeholder: {
					text: 'Ingrese información del cargo...'
				}
			});

			//Agrega al input hidden lo que el ususario escribe en medium editor
			editor.subscribe('editableInput', function(eventObj, editable){
				const contenido = editor.getContent();
				document.querySelector('#descripcion').value = contenido;
			});

			//LLena el editor con el contenido del input hidden 
			editor.setContent(document.querySelector('#descripcion').value);

			//DROPZONE
			const dropzoneDevJobs = new Dropzone('#dropzoneDevJobs',{
				url: "/vacantes/imagen",
				dictDefaultMessage: 'Sube aquí tu archivo.',
				acceptedFiles: ".png,.jpg,.jpeg,.gif,.bmp",
				addRemoveLinks: true,
				dicRemoveFile: 'Eliminar',
				maxFiles: 1,
				headers: {
					'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
				},
				init: function() {
                    if(document.querySelector('#imagen').value.trim() ) {
                       let imagenPublicada = {};
                       imagenPublicada.size = 1234;
                       imagenPublicada.name = document.querySelector('#imagen').value;
                       imagenPublicada.nombreServidor = document.querySelector('#imagen').value;
                       
                       this.options.addedfile.call(this, imagenPublicada);
                       this.options.thumbnail.call(this, imagenPublicada, `/storage/vacantes/${imagenPublicada.name}`);

                       imagenPublicada.previewElement.classList.add('dz-sucess');
                       imagenPublicada.previewElement.classList.add('dz-complete');
                    } 
                },
				success: function(file, response){
					console.log(response.correcto);
					document.querySelector('#error').textContent = '';

					//Coloca la respuesta del servidor en el input hidden
					document.querySelector('#imagen').value = response.correcto;

					//Anadir al objeto de archivo el nombre del servidor
					file.nombreServidor = response.correcto;
				},
				maxfilesexceeded: function(file) {
                    if( this.files[1] != null ) {
                        this.removeFile(this.files[0]); // eliminar el archivo anterior
                        this.addFile(file); // Agregar el nuevo archivo 
                    }
                },
                removedfile: function(file, response){
                	file.previewElement.parentNode.removeChild(file.previewElement);

                	params = {
                		imagen: file.nombreServidor
                	}
                	axios.post('/vacantes/borrarImagen', params)
                		.then(respuesta => console.log(respuesta))
                }
			});

		})
	</script>
@endsection