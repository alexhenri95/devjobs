@extends('layouts.app')

@section('navegacionCategorias')
	@include('ui.categoriasNav')
@endsection

@section('content')

	<div class="my-10 bg-gray-100 p-10 shadow">

		<h1 class="text-2xl text-gray-700 m-0">
			Categoría:
			<span class="font-bold">{{ $categoria->nombre }}</span>
		</h1>

		@include('ui.grid-vacantes')

		{{$vacantes->links()}}
		
	</div>

@endsection