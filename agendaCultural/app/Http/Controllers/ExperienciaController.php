<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        $experiencias = Experiencia::with(['empresa'])->get();
        foreach ($experiencias as $experiencia) {
            $experiencia->fechaInicio =  Carbon::parse($experiencia->fechaInicio)->locale('es')->format('Y/m/d');
        }


        return view('asistente.experiencias', compact('experiencias'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Experiencia $experiencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experiencia $experiencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experiencia $experiencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experiencia $experiencia)
    {
        //
    }
}
