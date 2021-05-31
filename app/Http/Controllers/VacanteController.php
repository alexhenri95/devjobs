<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Experiencia;
use App\Sueldo;
use App\Ubicacion;
use App\Vacante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->latest()->simplePaginate(5);
        return view('vacantes.index',compact('vacantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all(['id','nombre']);
        $experiencias = Experiencia::all(['id','nombre']);
        $ubicaciones = Ubicacion::all(['id','nombre']);
        $sueldos = Sueldo::all(['id','nombre']);
        return view('vacantes.create', compact('categorias', 'experiencias', 'ubicaciones','sueldos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validacion
        $data = $request->validate([
            'titulo' => 'required|min:5',
            'categoria' => 'required',
            'experiencia' => 'required',
            'ubicacion' => 'required',
            'sueldo' => 'required',
            'descripcion' => 'required|min:50',
            'imagen' => 'required',
            'skills' => 'required'
        ]);

        //Almacenar en la DB
        auth()->user()->vacantes()->create([
            'titulo' => $data['titulo'],
            'imagen' => $data['imagen'],
            'descripcion' => $data['descripcion'],
            'skills' => $data['skills'],
            'categoria_id' => $data['categoria'],
            'experiencia_id' => $data['experiencia'],
            'ubicacion_id' => $data['ubicacion'],
            'sueldo_id' => $data['sueldo']
        ]);

        return redirect()->route('vacantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {
        // $this->authorize('view', $vacante);
        return view('vacantes.show', compact('vacante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacante $vacante)
    {
        $this->authorize('view', $vacante);

        $categorias = Categoria::all(['id','nombre']);
        $experiencias = Experiencia::all(['id','nombre']);
        $ubicaciones = Ubicacion::all(['id','nombre']);
        $sueldos = Sueldo::all(['id','nombre']);
        return view('vacantes.edit', compact('vacante', 'categorias', 'experiencias', 'ubicaciones','sueldos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacante $vacante)
    {
        $this->authorize('update', $vacante);
        //Validacion
        $data = $request->validate([
            'titulo' => 'required|min:5',
            'categoria' => 'required',
            'experiencia' => 'required',
            'ubicacion' => 'required',
            'sueldo' => 'required',
            'descripcion' => 'required|min:50',
            'imagen' => 'required',
            'skills' => 'required'
        ]);

        $vacante->titulo = $data['titulo'];
        $vacante->skills = $data['skills'];
        $vacante->imagen = $data['imagen'];
        $vacante->descripcion = $data['descripcion'];
        $vacante->categoria_id = $data['categoria'];
        $vacante->experiencia_id = $data['experiencia'];
        $vacante->ubicacion_id = $data['ubicacion'];
        $vacante->sueldo_id = $data['sueldo'];
        $vacante->save();

        return redirect()->route('vacantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacante $vacante)
    {
        $this->authorize('destroy', $vacante);
        //return response()->json($vacante);
        $vacante->delete();

        return response()->json(['mensaje' => 'Se eliminó la vacante ' . $vacante->titulo]);
    }

    public function imagen(Request $request)
    {

        $imagen = $request->file('file');
        $nombreImagen = time().'.'.$imagen->extension();
        $imagen->move(public_path('storage/vacantes'), $nombreImagen);
        return response()->json(['correcto'=>$nombreImagen]);
    }

    public function borrarImagen(Request $request)
    {
        if($request->ajax()){
            $imagen = $request->get('imagen');

            if ( File::exists('storage/vacantes/'.$imagen )) {
                File::delete('storage/vacantes/'.$imagen);
            }

            return response('Imagen eliminada', 200);
        }
    }

    // Cambia el estado de una vacante
    public function estado(Request $request, Vacante $vacante)
    {
        // Leer nuevo estado y asignarlo
        $vacante->activo = $request->estado;

        // guardarlo en la BD
        $vacante->save();

        return response()->json(['respuesta' => 'Correcto']);
    }

    //Metodo para buscar por categoria y ubicacion
    public function buscar(Request $request)
    {
        //Validar
        $data = $request->validate([
            'categoria' => 'required',
            'ubicacion' => 'required'
        ]); 

        //Asignar valores
        $categoria = $data['categoria'];
        $ubicacion = $data['ubicacion'];

        $vacantes = Vacante::latest()->where('categoria_id', $categoria)
                                    ->where('ubicacion_id', $ubicacion)
                                    ->get();

        return view('buscar.index', compact('vacantes','request'));
    }

    public function resultados()
    {
        return 'mostrando resultados';
    }
}
