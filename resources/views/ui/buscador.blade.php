<div class="border my-5"></div>

<h2 class="text-xl text-gray-700 font-bold">Busca una vacante</h2>

<form action="{{ route('vacantes.buscar') }}" method="POST" class="my-5">
	@csrf
	<div class="md:flex items-start">

		<div class="md:w-1/2">
			<div class="flex flex-wrap mb-5 mr-1">
				<select name="ubicacion" id="ubicacion" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 py-2 bg-gray-400 px-2">
					<option value="" disabled selected>Seleccione la ubicación...</option>
					@foreach($ubicaciones as $ubicacion)
						<option value="{{$ubicacion->id}}" {{old('ubicacion') == $ubicacion->id ? 'selected':''}}>{{$ubicacion->nombre}}</option>
					@endforeach
				</select>

		        @error('ubicacion')
		            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
			</div>
		</div>

		<div class="md:w-1/2">
			<div class="flex flex-wrap mb-5 ml-1">
				<select name="categoria" id="categoria" class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 py-2 bg-gray-400 px-2">
					<option value="" disabled selected>Seleccione una categoría...</option>
					@foreach($categorias as $categoria)
						<option value="{{$categoria->id}}" {{old('categoria') == $categoria->id ? 'selected':''}}>{{$categoria->nombre}}</option>
					@endforeach
				</select>

		        @error('categoria')
		            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
			</div>
		</div>
	</div>
	<button type="submit" class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase font-bold text-sm cursor-pointer">Buscar vacante</button>
</form>