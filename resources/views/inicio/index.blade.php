@extends('layouts.app')

@section('navegacionCategorias')
	@include('ui.categoriasNav')
@endsection

@section('content')
	
	<div class="flex lg:flex-row flex-col shadow bg-white">

		<div class="lg:w-1/2 px-4 md:px-12 py-12 md:py-24">
			<p class="text-3xl text-gray-700">
				dev<span class="font-bold">Jobs</span>
			</p>
			<h1 class="mt-2 sm:mt-4 text-2xl font-bold text-gray-700 leading-tight">
				Encuentra un trabajo remoto en tu país <span class="text-indigo-500 block">Para Desarrolladores / Diseñadores Web</span>
			</h1>

			@include('ui.buscador')

		</div>

		<div class="block lg:w-1/2">
			<img class="inset-0 h-full w-full object-cover object-right" src="{{asset('img/book.jpg')}}" alt="devjobs">
		</div>

	</div>

	<div class="my-10 bg-gray-100 px-4 md:px-10 py-10 shadow">

		<h1 class="text-2xl text-gray-700 m-0">
			<span class="font-bold">Vacantes Recientes</span>
		</h1>

		@include('ui.grid-vacantes')

		{{$vacantes->links()}}
		
	</div>

@endsection