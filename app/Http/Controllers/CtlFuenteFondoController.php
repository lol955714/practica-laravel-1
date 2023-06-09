<?php

namespace App\Http\Controllers;

use App\Models\CtlFuenteFondo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class CtlFuenteFondoController
 * @package App\Http\Controllers
 */
class CtlFuenteFondoController extends Controller
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
        $ctlFuenteFondos = CtlFuenteFondo::paginate();

        return view('ctl-fuente-fondo.index', compact('ctlFuenteFondos'))
            ->with('i', (request()->input('page', 1) - 1) * $ctlFuenteFondos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ctlFuenteFondo = new CtlFuenteFondo();
        return view('ctl-fuente-fondo.create', compact('ctlFuenteFondo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CtlFuenteFondo::$rules);

        $ctlFuenteFondo = CtlFuenteFondo::create($request->all());

        return redirect()->route('ctl-fuente-fondos.index')
            ->with('success', 'Fuente de fondo creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ctlFuenteFondo = CtlFuenteFondo::find($id);

        return view('ctl-fuente-fondo.show', compact('ctlFuenteFondo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ctlFuenteFondo = CtlFuenteFondo::find($id);

        return view('ctl-fuente-fondo.edit', compact('ctlFuenteFondo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CtlFuenteFondo $ctlFuenteFondo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CtlFuenteFondo $ctlFuenteFondo)
    {
        request()->validate(CtlFuenteFondo::$rules);

        $ctlFuenteFondo->update($request->all());

        return redirect()->route('ctl-fuente-fondos.index')
            ->with('success', 'fuente actualizada correctamente');
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
            $ctlFuenteFondo = CtlFuenteFondo::find($id)->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('ctl-fuente-fondos.index')
            ->with('success', 'No se puede eliminar el registro, está siendo utilizado.');
        }

        return redirect()->route('ctl-fuente-fondos.index')
            ->with('success', 'fuente eliminada correctamente');
    }
}
