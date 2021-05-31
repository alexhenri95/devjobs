<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    protected $fillable = [
    	'titulo',
    	'imagen',
    	'descripcion',
    	'skills',
    	'categoria_id',
    	'experiencia_id',
    	'ubicacion_id',
    	'sueldo_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function sueldo()
    {
        return $this->belongsTo(Sueldo::class);
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);
    }

    public function experiencia()
    {
        return $this->belongsTo(Experiencia::class);
    }

    public function reclutador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function candidatos()
    {
        return $this->hasMany(Candidato::class, 'vacante_id');
    }

}
