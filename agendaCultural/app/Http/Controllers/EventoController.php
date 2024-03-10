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
        $eventos = Evento::with(['user', 'categoria'])->paginate(8);

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
    public function show($filtro)
    {
        switch ($filtro) {
            case 'mes':
                $eventos = Evento::with(['user', 'categoria'])
                    ->whereYear('fecha', now()->year)
                    ->whereMonth('fecha', now()->month)
                    ->paginate(8);
                var_dump($eventos);
                break;
            case 'semana':
                $eventos = Evento::with(['user', 'categoria'])
                    ->where('fecha', '>=', now()->startOfWeek())
                    ->where('fecha', '<=', now()->endOfWeek())
                    ->paginate(8);
                var_dump($eventos);
                break;
            default:

                break;
        }
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
