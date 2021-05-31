@extends('layouts.app')

@section('navegacion')
	@include('ui.navAdmin')
@endsection

@section('content')
	
	<h1 class="text-2xl text-gray-900 text-center my-10">Mis Notificaciones ({{Auth::user()->unreadNotifications->count()}})</h1>


	<div class="w-full my-4">
    <div x-data={show:false} class="rounded-sm">
        <div class="border border-b-0 bg-gray-100 px-10 py-6" id="headingOne">
            <p class="text-blue-500 focus:outline-none">
            Notificaciones No Leídas ({{Auth::user()->unreadNotifications->count()}})
            </p>
        </div>
        <div x-show="show" class="border border-b-0 px-10 py-6">
            
        	@if(count($notificaciones) > 0)
        	<table class="min-w-full">
        		<tbody>
				@foreach($notificaciones as $notificacion)
					@php
						$data = $notificacion->data;
						$fechaCreada = $notificacion->created_at;

						$fecha = $fechaCreada->format('d-m-Y');
					@endphp
					
					<tr>
						<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
							<p class="text-gray-700 fas fa-spinner text-xl text-green-400"></p>
						</td>
						<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
							<p class="text-gray-700"> {{ $fecha }}</p>
						</td>
						<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
							<p class="text-gray-700">Candidato: {{ $data['vacante'] }}</p>
						</td>
						<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
							<a href="{{ route('candidatos.index', ['id' => $data['vacanteId'] ]) }}" class="bg-teal-500 py-1 px-2 inline-block text-xs font-bold uppercase text-white rounded">Ver candidatos</a>
						</td>
					</tr>
				@endforeach
				</tbody>
        	</table>
        	@else
				<p class="text-center my-3">Por ahora no tienes notificaciones.</p>
			@endif

        </div>
    </div>
    
    <div x-data={show:false} class="rounded-sm">
        <div class="border border-b-0 bg-gray-100 px-10 py-6" id="headingOne">
            <p class="text-blue-500 focus:outline-none">
            Notificaciones Leídas ({{Auth::user()->Notifications->count()}})
            </p>
        </div>
        <div x-show="show" class="border px-10 py-6">
        	@if(count($notificacionesLeidas) > 0)
        	<table class="min-w-full">
        		<tbody>
				@foreach($notificacionesLeidas as $notificacionLeida)
					@php
						$data = $notificacionLeida->data;
						$fechaCreada = $notificacionLeida->created_at;

						$fecha = $fechaCreada->format('d-m-Y');
					@endphp
					
					<tr>
						<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
							<p class="text-gray-700 fas fa-check-circle text-xl text-green-400"></p>
						</td>
						<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
							<p class="text-gray-700"> {{ $fecha }}</p>
						</td>
						<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
							<p class="text-gray-700">Candidato: {{ $data['vacante'] }}</p>
						</td>
						<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
							<a href="{{ route('candidatos.index', ['id' => $data['vacanteId'] ]) }}" class="bg-teal-500 py-1 px-2 inline-block text-xs font-bold uppercase text-white rounded">Ver candidatos</a>
						</td>
					</tr>
				@endforeach
				</tbody>
        	</table>
        	@else
				<p class="text-center my-3">Por ahora no tienes notificaciones.</p>
			@endif

        </div>
    </div>
</div>

	
@endsection

@section('scripts')
	<script src="https://kit.fontawesome.com/990aa8e1e3.js" crossorigin="anonymous"></script>
@endsection