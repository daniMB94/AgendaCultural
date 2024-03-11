<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::all();

        //En primer lugar recorremos los eventos para establecer como terminados los que tiene una fecha posterior a hoy
        foreach ($eventos as $evento) {
            if ($evento->fecha < now()) {
                $evento->estado = 'terminado';
            }
            $evento->save();
        }
        //Posteriormente recuperamos todos los eventos con su relacion user y categoria para pintarlos
        $eventos = Evento::with(['user', 'categoria'])
            ->orderBy('fecha', 'asc')
            ->paginate(8);

        return view('asistente.eventos', compact('eventos'));
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
    }

    /**
     * Display the specified resource.
     */
    public function showMes()
    {
        $eventos = Evento::with(['user', 'categoria'])
            ->whereYear('fecha', now()->year)
            ->whereMonth('fecha', now()->month)
            ->orderBy('fecha', 'asc')
            ->paginate(8);
        return view('asistente.eventos', compact('eventos'));
    }

    public function showSemana()
    {
        $eventos = Evento::with(['user', 'categoria'])
            ->where('fecha', '>=', now()->startOfWeek())
            ->where('fecha', '<=', now()->endOfWeek())
            ->orderBy('fecha', 'asc')
            ->paginate(8);
        return view('asistente.eventos', compact('eventos'));
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
