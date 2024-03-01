<?php

namespace App\Http\Controllers;
use App\Models\Justificantes;
use App\Models\Alumno;
use Illuminate\Http\Request;

class JustificanteController extends Controller
{
    public function guardarJustificante(Request $datos){
        $alumno_id = $datos->input('alumno_id');

        // Obtener el nombre del alumno utilizando el ID
        $alumno = Alumno::find($alumno_id);
        $nombre_alumno = $alumno->nombre;
        Justificantes::create([ 
            'user_id'       => auth()->user()->id,
            'alumno_id'     =>  $datos->input('alumno_id'),
            'nombre'        => $nombre_alumno,
            'grupo'         => $datos->input('grupo'),
            'fecha_falta'   => $datos->input('fecha_falta'),
            'fecha_hasta'   => $datos->input('fecha_hasta'),
            'motivos'       => $datos->input('motivos')
        ]);
        return redirect('/home');
    }
}
