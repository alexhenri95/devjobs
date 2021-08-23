<a href="{{route('vacantes.index')}}" class="font-bold p-3 {{Request::is('vacantes') ? 'bg-indigo-800 text-gray-100' : 'text-indigo-900'}}">Ver vacantes</a>
<a href="{{route('vacantes.create')}}" class=" font-bold p-3 {{Request::is('vacantes/crear') ? 'bg-indigo-800 text-gray-100' : 'text-indigo-900'}}">Nueva vacante</a>
