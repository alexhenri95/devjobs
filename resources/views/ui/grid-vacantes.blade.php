<ul class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
	@foreach($vacantes as $vacante)
		<li class="p-8 border border-gray-300 bg-white shadow">
			<h2 class="text-1xl font-bold text-teal-500">{{ $vacante->titulo }}</h2>
			
			<p class="block text-teal-700 font-normal my-2">
				<span class="bg-teal-400 rounded-lg px-1">{{ $vacante->categoria->nombre }}</span>
			</p>

			<p class="block text-gray-700 font-normal text-sm my-2">
				Ubicación: {{ $vacante->ubicacion->nombre }}	
			</p>

			<p class="block text-gray-700 font-normal text-sm my-2">
				Experiencia: {{ $vacante->experiencia->nombre }}	
			</p>

			<a href="{{ route('vacantes.show', $vacante->id) }}" class="bg-teal-500 text-gray-100 mt-2 px-4 py-2 inline-block rounded font-bold text-sm ">Ver vacante</a>
		</li>
	@endforeach
</ul>