<ul class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mb-2">
	@foreach($vacantes as $vacante)
		<li class="p-8 border border-gray-300 bg-white shadow">
			<h2 class="text-1xl font-bold text-indigo-800">{{ $vacante->titulo }}</h2>
			
			<p class="block text-white font-normal text-sm my-2">
				<span class="bg-indigo-500 rounded-lg px-2">{{ $vacante->categoria->nombre }}</span>
			</p>

			<p class="block text-gray-700 font-normal text-sm my-2">
				<span class="font-semibold">Ubicación:</span> {{ $vacante->ubicacion->nombre }}	
			</p>

			<p class="block text-gray-700 font-normal text-sm my-2">
				<span class="font-semibold">Experiencia:</span> {{ $vacante->experiencia->nombre }}	
			</p>

			<p class="block text-gray-700 font-normal text-sm my-2">
				<span class="font-semibold">Publicado:</span> {{ $vacante->created_at->diffForHumans() }}	
			</p>

			<a href="{{ route('vacantes.show', $vacante->id) }}" class="bg-indigo-500 text-gray-100 mt-2 px-4 py-2 inline-block rounded font-bold text-sm ">Ver vacante</a>
		</li>
	@endforeach
</ul>