@extends('layouts.app')

@section('navegacion')
	@include('ui.navAdmin')
@endsection

@section('content')
	<h1 class="text-2xl text-gray-900 text-center my-10">Candidatos: {{$vacante->titulo}}</h1>
	<div class="flex flex-col mb-10">

		@if( count($vacante->candidatos) > 0 )

			<div class="sm:-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
				<div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
					<table class="min-w-full">
						<thead class="bg-gray-100 ">
							<tr>
								<th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
									Candidatos
								</th>
								<th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
									Email
								</th>
								<th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
									CV
								</th>
							</tr>
						</thead>
						<tbody class="bg-white">
						@foreach ($vacante->candidatos as $candidato)
							<tr>
								<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
									<div class="flex items-center">
										<div class="ml-4">
											<div class="text-sm leading-5 font-medium text-gray-900">{{$candidato->tituloAcademico}}</div>
											<div class="text-sm leading-5 text-gray-700">Candidato: {{$candidato->nombre}} </div>
										</div>
									</div>
								</td>
								<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
									<p class="text-gray-700">{{ $candidato->email }}</p>
								</td>
								<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
									<a href="/storage/cv/{{$candidato->cv}}" class="bg-teal-500 py-1 px-2 inline-block text-xs font-bold uppercase text-white rounded">CV</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			
		@else
			<p class="text-center mt-10">No hay candidatos.</p>
		@endif

	</div>

@endsection