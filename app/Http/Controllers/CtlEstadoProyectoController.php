<?php

namespace App\Http\Controllers;

use App\Models\CtlEstadoProyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class CtlEstadoProyectoController
 * @package App\Http\Controllers
 */
class CtlEstadoProyectoController extends Controller
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
        $ctlEstadoProyectos = CtlEstadoProyecto::paginate();

        return view('ctl-estado-proyecto.index', compact('ctlEstadoProyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $ctlEstadoProyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ctlEstadoProyecto = new CtlEstadoProyecto();
        return view('ctl-estado-proyecto.create', compact('ctlEstadoProyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CtlEstadoProyecto::$rules);

        $ctlEstadoProyecto = CtlEstadoProyecto::create($request->all());

        return redirect()->route('ctl-estado-proyectos.index')
            ->with('success', 'estado de proyecto creado .');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ctlEstadoProyecto = CtlEstadoProyecto::find($id);

        return view('ctl-estado-proyecto.show', compact('ctlEstadoProyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ctlEstadoProyecto = CtlEstadoProyecto::find($id);

        return view('ctl-estado-proyecto.edit', compact('ctlEstadoProyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CtlEstadoProyecto $ctlEstadoProyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CtlEstadoProyecto $ctlEstadoProyecto)
    {
        request()->validate(CtlEstadoProyecto::$rules);

        $ctlEstadoProyecto->update($request->all());

        return redirect()->route('ctl-estado-proyectos.index')
            ->with('success', 'estado de proyecto actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $ctlEstadoProyecto = CtlEstadoProyecto::find($id)->delete();
            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('ctl-estado-proyectos.index')
                ->with('success', 'No se puede eliminar el registro, está siendo utilizado.');
        }

        return redirect()->route('ctl-estado-proyectos.index')
            ->with('success', 'Estado de proyecto eliminado exitosamente.');
    }
}
