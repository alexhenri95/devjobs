@extends('layouts.app')

@section('navegacionCategorias')
	@include('ui.categoriasNav')
@endsection

@section('content')

	<div class="md:my-10 bg-gray-100 py-10 px-4 md:px-10 shadow">

		<h1 class="text-2xl text-gray-700 m-0">
			Categoría:
			<span class="font-bold">{{ $categoria->nombre }}</span>
		</h1>

		@if($vacantes->count())

			@include('ui.grid-vacantes')

			{{$vacantes->links()}}

		@else
			<div class="p-5 text-center mt-6">
				<p class="text-lg font-semibold">Lo sentimos, por el momento no hay resultado para esta vacante.</p>
			</div>

		@endif

		
		
	</div>

@endsection