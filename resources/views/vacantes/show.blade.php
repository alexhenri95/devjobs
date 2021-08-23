@extends('layouts.app')


@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" />
@endsection

@section('content')
	@if(session('mensaje'))
		<div class="bg-indigo-500 p-6 rounded text-center text-white font-bold uppercase">
			{{ session('mensaje') }}
		</div>
	@endif

	<h1 class="text-2xl text-gray-900 text-center mt-10">{{Str::title($vacante->titulo)}}</h1>
	
	<div class="my-10 md:my-20 md:flex items-start">
		<div class="md:w-3/5 md:mr-8 mb-10 md:mb-0">

			<div class="flex items-start">
				<div class="md:w-2/3">
					<p class="block text-gray-700 font-bold my-2">
						Categoría: <span class="font-normal">{{$vacante->categoria->nombre}}</span>
					</p>
					<p class="block text-gray-700 font-bold my-2">
						Fecha de publicación: <span class="font-normal">{{$vacante->created_at->diffForHumans()}}</span>
					</p>
					<p class="block text-gray-700 font-bold my-2">
						Sueldo: <span class="font-normal">{{$vacante->sueldo->nombre}} dólares</span>
					</p>
					<p class="block text-gray-700 font-bold my-2">
						Ubicación: <span class="font-normal">{{$vacante->ubicacion->nombre}}</span>
					</p>
					<p class="block text-gray-700 font-bold my-2">
						Experiencia: <span class="font-normal">{{$vacante->experiencia->nombre}}</span>
					</p>
				</div>
				<div class="md:w-1/3">
					@if($vacante->imagen)
					<a href="/storage/vacantes/{{$vacante->imagen}}" data-lightbox="imagen" data-title="{{$vacante->titulo}}">
						<img src="/storage/vacantes/{{$vacante->imagen}}" class="w-40 mt-3 mx-auto" alt="">
					</a>
					@endif
				</div>
			</div>

			<h4 class="font-bold mt-10 mb-5 text-gray-700">Habilidades y conocimientos</h4>

			@php
				$arraySkills = explode(',', $vacante->skills)
			@endphp

			<ul class="list-disc list-inside leading-6">
				@foreach($arraySkills as $skill)
				<li>{{$skill}}</li>
				@endforeach
			</ul>

			<h4 class="font-bold mt-10 mb-5 text-gray-700">Descripción del puesto</h4>
			<div class="leading-5">
				{!! $vacante->descripcion !!}
			</div>

			<h4 class="font-bold mt-10 mb-5 text-gray-700">Reclutador</h4>
			<div class="leading-5">
				{!! $vacante->reclutador->name !!}
			</div>

		</div>
		
		@if($vacante->activo == 1)
			@include('ui.contacto')
		@endif
	</div>
@endsection