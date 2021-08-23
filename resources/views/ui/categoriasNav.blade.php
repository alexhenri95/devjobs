<nav class="flex items-center justify-between flex-wrap py-3 bg-indigo-400 px-4 md:px-16">
	
	<div class="">
        <nav class="flex items-center justify-between flex-wrap">
            
            <div class="block lg:hidden">
                <button
                    class="navbar-burger flex items-center px-2 py-1 border rounded text-white border-white hover:text-white hover:border-white">
                    <svg class="fill-current h-4 w-4 text-gray-700" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div id="main-nav" class="w-full flex-grow items-center hidden">
                <div class="text-sm lg:flex-grow mt-2 animated jackinthebox">
                	<ul>
                		@foreach($categorias as $categoria)
                		<li>
							<a href="{{route('categorias.show', $categoria->id)}}" class="block mt-4 lg:inline-block lg:mt-0 text-indigo-900 font-semibold hover:text-white p-1 text-sm rounded">
								{{$categoria->nombre}}
							</a>
						</li>
						@endforeach	
                	</ul>
                </div>
	        </div>
	    </nav>
	</div>
					
	<div class="container mx-auto px-4 flex justify-between items-center text-sm md:block text-center hidden" id="menu">
		@foreach($categorias as $categoria)
			<a href="{{route('categorias.show', $categoria->id)}}" class="block mt-4 lg:inline-block lg:mt-0 text-indigo-900 font-semibold hover:text-white p-1 text-sm px-3 rounded">
				{{$categoria->nombre}}
			</a>
		@endforeach
	</div>

</nav>

