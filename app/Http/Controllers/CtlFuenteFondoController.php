<?php

namespace App\Http\Controllers;

use App\Models\CtlFuenteFondo;
use Illuminate\Http\Request;

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
            ->with('success', 'CtlFuenteFondo created successfully.');
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
            ->with('success', 'CtlFuenteFondo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ctlFuenteFondo = CtlFuenteFondo::find($id)->delete();

        return redirect()->route('ctl-fuente-fondos.index')
            ->with('success', 'CtlFuenteFondo deleted successfully');
    }
}
