<?php

namespace App\Http\Controllers;

use App\Models\MntProyecto;
use Illuminate\Http\Request;

/**
 * Class MntProyectoController
 * @package App\Http\Controllers
 */
class MntProyectoController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mntProyectos = MntProyecto::paginate();

        return view('mnt-proyecto.index', compact('mntProyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $mntProyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mntProyecto = new MntProyecto();
        return view('mnt-proyecto.create', compact('mntProyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MntProyecto::$rules);

        $mntProyecto = MntProyecto::create($request->all());

        return redirect()->route('mnt-proyectos.index')
            ->with('success', 'MntProyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mntProyecto = MntProyecto::find($id);

        return view('mnt-proyecto.show', compact('mntProyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mntProyecto = MntProyecto::find($id);

        return view('mnt-proyecto.edit', compact('mntProyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MntProyecto $mntProyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MntProyecto $mntProyecto)
    {
        request()->validate(MntProyecto::$rules);

        $mntProyecto->update($request->all());

        return redirect()->route('mnt-proyectos.index')
            ->with('success', 'MntProyecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mntProyecto = MntProyecto::find($id)->delete();

        return redirect()->route('mnt-proyectos.index')
            ->with('success', 'MntProyecto deleted successfully');
    }
}
