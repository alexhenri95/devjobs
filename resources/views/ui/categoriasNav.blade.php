@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@endsection


<nav class="flex items-center justify-between flex-wrap bg-teal-500 py-2">
	
	<div class="block lg:hidden">

		<button class="flex items-center ml-3 text-center px-3 py-2 border rounded text-teal-100 border-teal-400 hover:text-white hover:border-white" id="navbar-btn">
		    <p class="text-gray-700 fas fa-bars text-xl text-white"></p>
		</button>

	</div>

	<div class="container mx-auto w-full block flex-grow lg:flex lg:items-center lg:w-auto" id="navbar">
		<div class="text-sm lg:flex-grow  text-center lg:text-center">
			@foreach($categorias as $categoria)
				<a href="{{route('categorias.show', $categoria->id)}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-100 hover:text-white mr-4 p-1 text-sm">
					{{$categoria->nombre}}
				</a>
			@endforeach
		</div>
	</div>

</nav>


@section('scripts')
	
<script src="https://kit.fontawesome.com/990aa8e1e3.js" crossorigin="anonymous"></script>

@endsection