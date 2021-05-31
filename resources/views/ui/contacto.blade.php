<aside class="md:w-2/5 bg-teal-500 px-5 py-10 rounded m-3">

	<h3 class="text-xl text-white uppercase font-bold text-center mb-5">Contacto al reclutador</h3>
	<form action="{{route('candidatos.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="mb-4">
			<label for="tituloAcademico" class="block text-white text-sm font-bold mb-4">Título Universitario:</label>
			<input type="text" name="tituloAcademico" id="tituloAcademico" class="p-2 bg-gray-100 rounded  form-input w-full @error('tituloAcademico') border border-red-500 @enderror" placeholder="Escriba su título universitario..." value="{{old('tituloAcademico')}}">

			@error('tituloAcademico')
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
		</div>

		<div class="mb-4">
			<label for="nombre" class="block text-white text-sm font-bold mb-4">Nombre:</label>
			<input type="text" name="nombre" id="nombre" class="p-2 bg-gray-100 rounded  form-input w-full @error('nombre') border border-red-500 @enderror" placeholder="Escriba su nombre..." value="{{old('nombre')}}">

			@error('nombre')
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
		</div>

		<div class="mb-4">
			<label for="email" class="block text-white text-sm font-bold mb-4">Email:</label>
			<input type="email" name="email" id="email" class="p-2 bg-gray-100 rounded  form-input w-full @error('email') border border-red-500 @enderror" placeholder="Escriba su email..." value="{{old('email')}}">

			@error('email')
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
		</div>

		<div class="mb-4">
			<label for="cv" class="block text-white text-sm font-bold mb-4">Curriculum (PDF):</label>
			<input type="file" name="cv" id="cv" class="py-1 rounded  form-input w-full" accept="application/pdf">

			@error('cv')
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 px-4 py-3 text-xs w-full mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
		</div>

		<input type="hidden" name="vacante_id" value="{{$vacante->id}}">

		<input type="submit" value="Contactar" class="bg-teal-700 w-full font-bold hover:bg-teal-800 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase cursor-pointer">
	</form> 
</aside>