<?php

namespace App\Http\Controllers;

use App\Models\CtlInstitucion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class CtlInstitucionController
 * @package App\Http\Controllers
 */
class CtlInstitucionController extends Controller
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
        $ctlInstitucions = CtlInstitucion::paginate();

        return view('ctl-institucion.index', compact('ctlInstitucions'))
            ->with('i', (request()->input('page', 1) - 1) * $ctlInstitucions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ctlInstitucion = new CtlInstitucion();
        return view('ctl-institucion.create', compact('ctlInstitucion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CtlInstitucion::$rules);

        $ctlInstitucion = CtlInstitucion::create($request->all());

        return redirect()->route('ctl-institucion.index')
            ->with('success', 'Institucion creada .');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ctlInstitucion = CtlInstitucion::find($id);

        return view('ctl-institucion.show', compact('ctlInstitucion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ctlInstitucion = CtlInstitucion::find($id);

        return view('ctl-institucion.edit', compact('ctlInstitucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CtlInstitucion $ctlInstitucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CtlInstitucion $ctlInstitucion)
    {
        request()->validate(CtlInstitucion::$rules);

        $ctlInstitucion->update($request->all());

        return redirect()->route('ctl-institucion.index')
            ->with('success', 'Institución actualizada correctamente.');
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
            $ctlInstitucion = CtlInstitucion::find($id)->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('ctl-institucion.index')
            ->with('success', 'No se puede eliminar el registro, está siendo utilizado.');
        }

        return redirect()->route('ctl-institucion.index')
            ->with('success', 'Institución eliminada correctamente.');
    }
}
