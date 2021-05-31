<?php

namespace App\Http\Controllers;

use App\Candidato;
use App\Notifications\NuevoCandidato;
use App\Vacante;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Obtener el id actual
        $vacante_id = $request->route('id');

        //Obtener candidato y vacante
        $vacante = Vacante::findOrFail($vacante_id);

        $this->authorize('view', $vacante);

        return view('candidatos.index', compact('vacante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tituloAcademico' => 'required',
            'nombre' => 'required',
            'email' => 'required|email',
            'cv' => 'required|mimes:pdf|max:1000',
            'vacante_id' => 'required',
        ]);

        if ($request->file('cv')) {
            $archivo = $request->file('cv');
            $nombreArchivo = time().".".$request->file('cv')->extension();
            $ubicacion = public_path('/storage/cv');
            $archivo->move($ubicacion, $nombreArchivo);
        }

        $candidato = new Candidato();
        $candidato->tituloAcademico = $data['tituloAcademico'];
        $candidato->nombre = $data['nombre'];
        $candidato->email = $data['email'];
        $candidato->cv = $nombreArchivo;
        $candidato->vacante_id = $data['vacante_id'];
        $candidato->save();

        $vacante = Vacante::find($data['vacante_id']);
        $reclutador = $vacante->reclutador;
        $reclutador->notify( new NuevoCandidato($vacante->titulo, $vacante->id) );

        return back()->with('mensaje', 'Información enviada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidato $candidato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $candidato)
    {
        //
    }
}
