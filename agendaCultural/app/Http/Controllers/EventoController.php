<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use App\Models\Experiencia;
use App\Models\Empresa;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use App\Models\Categoria;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $eventos = Evento::all();
        //obtenemos las categorias para usarlas en la creacion del filtro de la vista
        $categorias = Categoria::all();
        //Comprobmaos si la request lleva categoria par filtrar los eventos que se pintarán
        if (isset($request['categoria']) && is_numeric($request->categoria)) {
            $categoriaFiltro = $request->categoria;
        } else {
            $categoriaFiltro = false;
        }

        //Recorremos los eventos para establecer como terminados los que tiene una fecha posterior a hoy
        foreach ($eventos as $evento) {
            if ($evento->fecha < now()) {
                $evento->estado = 'terminado';
            }
            $evento->save();
        }
        //Posteriormente recuperamos todos los eventos con su relacion user y categoria para pintarlos
        $eventosFiltrados = Evento::with(['user', 'categoria'])
            ->orderBy('fecha', 'asc');
        //Si categoría filtro tiene valor se añade a la consulta para filtrar por categoria
        if ($categoriaFiltro) {
            $eventosFiltrados->where('categoria_id', $categoriaFiltro);
        }
        $eventos = $eventosFiltrados->paginate(8);

        return view('asistente.eventos', compact('eventos', 'categorias'));
    }

    public function indexAdmin(Request $request)
    {
        $nEventos = Evento::all()->count();
        $nUsuarios = User::all()->count();
        $nExperiencias = Experiencia::all()->count();
        $nEmpresas = Empresa::all()->count() - 2;
        $nInscripciones = Inscripcion::all()->count();
        //Esta variable almacena el número de inscripciones vinculadas a un evento que sigue en vigor, es decir, que tiene una fechaFin mayor a la fecha de hoy y esta creado
        $inscripcionesActivas = Inscripcion::whereHas('evento', function ($query) {
            $query->where('fecha', '>=', now())
                ->where('estado', 'creado');
        })->count();
        //Esta variable almacena el número de inscripciones vinculadas a un evento que sigue ya no está en vigor, es decir, que tiene una fechaFin menor a la fecha de hoy y esta cancelado o terminado
        $inscripcionesNoActivas = Inscripcion::whereHas('evento', function ($query) {
            $query->where('fecha', '<', now())
                ->orWhere('estado', 'cancelado')
                ->orWhere('estado', 'terminado');
        })->count();

        //idem para los eventos
        $eventosActivos = Evento::where('fecha', '>=', now())
            ->where('estado', 'creado')
            ->count();
        $eventosNoActivos = Evento::where('fecha', '<', now())
            ->orWhere('estado', 'terminado')
            ->orWhere('estado', 'cancelado')
            ->count();

        return view('admin.dashboard', compact('nEventos', 'nUsuarios', 'nExperiencias', 'nEmpresas', 'nInscripciones', 'inscripcionesActivas', 'inscripcionesNoActivas', 'eventosActivos', 'eventosNoActivos'));
    }

    public function show()
    {
        $events = Evento::with('categoria')->paginate(15);
        $totalEvents = Evento::count();



        return view('admin.events', compact('events', 'totalEvents'));
    }

    public function eventCretaeForm()
    {
        return view('admin.eventNewForm');
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
    public function showMes(Request $request)
    {
        //obtenemos las categorias para usarlas en la creacion del filtro de la vista
        $categorias = Categoria::all();
        //Comprobmaos si la request lleva categoria par filtrar los eventos que se pintarán
        if (isset($request['categoria']) && is_numeric($request->categoria)) {
            $categoriaFiltro = $request->categoria;
        } else {
            $categoriaFiltro = false;
        }
        $eventosFiltrados = Evento::with(['user', 'categoria'])
            ->whereYear('fecha', '>=', now()->year)
            ->whereMonth('fecha', '<=', now()->month);
        if ($categoriaFiltro) {
            $eventosFiltrados->where('categoria_id', $categoriaFiltro);
        }
        $eventos = $eventosFiltrados->orderBy('fecha', 'asc')->paginate(8);
        return view('asistente.eventos', compact('eventos', 'categorias'));
    }

    public function showSemana(Request $request)
    {
        //obtenemos las categorias para usarlas en la creacion del filtro de la vista
        $categorias = Categoria::all();
        //Comprobmaos si la request lleva categoria par filtrar los eventos que se pintarán
        if (isset($request['categoria']) && is_numeric($request->categoria)) {
            $categoriaFiltro = $request->categoria;
        } else {
            $categoriaFiltro = false;
        }
        $eventosFiltrados = Evento::with(['user', 'categoria'])
            ->where('fecha', '>=', now()->startOfWeek())
            ->where('fecha', '<=', now()->endOfWeek());
        if ($categoriaFiltro) {
            $eventosFiltrados->where('categoria_id', $categoriaFiltro);
        }
        $eventos = $eventosFiltrados->orderBy('fecha', 'asc')->paginate(8);
        return view('asistente.eventos', compact('eventos', 'categorias'));
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        //
    }

    public function eventUpdateForm($id)
    {
        $evento = Evento::where('id', intval($id))->first();
        $categorias = Categoria::all();

        return view('admin.eventUpdateForm', compact('evento', 'categorias'));
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
    public function destroyEvent($id)
    {
        Evento::destroy($id);
        return redirect()->route('admin.events');
    }

    public function eventDetails($id)
    {
        $evento = Evento::where('id', intval($id))->first();
        return view('admin.eventDetails', compact('evento'));
    }
    public function eventInscriptions($id)
    {
        $inscripciones = Inscripcion::where('evento_id', intval($id))->get();

        return view('admin.eventInscriptions', compact('inscripciones'));
    }
    public function eventCancelation(Request $request)
    {
        $evento = Evento::where('id', intval($request->id))->first();

        $evento->estado = 'cancelado';

        $evento->save();

        return redirect(route('admin.events'));
    }
}
