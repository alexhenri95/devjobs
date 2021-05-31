@extends('layouts.app')

@section('navegacionCategorias')
	@include('ui.categoriasNav')
@endsection

@section('content')
	

	<div class="my-10 bg-gray-100 p-10 shadow">

		<h1 class="text-2xl text-gray-700 m-0">
			Resultado de la búsqueda: 
			{{-- <span class="font-bold">{{ $categoria->nombre }}</span> --}}
		</h1>

		@if( count($vacantes) > 0 )

			@include('ui.grid-vacantes')

		@else

			<p class="text-center text-gray-700 my-10">Lo sentimos, no hay resultados de esta búsqueda.</p>

		@endif

		
	</div>

@endsection