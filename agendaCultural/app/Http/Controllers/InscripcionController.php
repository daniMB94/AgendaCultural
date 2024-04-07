<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = Inscripcion::with(['evento'])->paginate(8);
        return view('asistente.inscripciones', compact('inscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inscripcion = new Inscripcion();
        $inscripcion->numEntradas = $request->numEntradas;
        $inscripcion->estado = "recibida";
        $inscripcion->user_id = $request->user_id;
        $inscripcion->evento_id = $request->evento_id;

        $inscripcion->save();

        return redirect()->route('inscripciones.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscripcion $inscripcion)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscripcion $inscripcion)
    {
        //
    }

    public function inscriptionsDelete(Request $request)
    {
        //recorrer el array de checkboxes marcados para eliminar cada una de las inscripciones asociadas al evento

        if ($request->has('eliminarInscripcion')) {

            $ids = $request->input('eliminarInscripcion');


            foreach ($ids as $id) {

                echo "ID de inscripción a eliminar: $id <br>";
            }
        } else {
            echo "No se seleccionaron inscripciones para eliminar.";
        }
    }
}