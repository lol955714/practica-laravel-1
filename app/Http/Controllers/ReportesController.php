<?php

namespace App\Http\Controllers;

use App\Models\MntProyecto;
use Illuminate\Http\Request;
use PDF;

class reportesController extends Controller
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
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function proyectoPdf($id)
    {
        $mntProyecto = MntProyecto::with('ctlEstadoProyecto', 'ctlFuenteFondo', 'ctlInstitucion')->find($id);

        $pdf = PDF::loadView('pdf/proyecto/show', compact('mntProyecto'));
        return $pdf->download('detalle_proyecto.pdf');
    }

    public function listadoProyectoPdf(){
        $mntProyectos = MntProyecto::with('ctlEstadoProyecto', 'ctlFuenteFondo', 'ctlInstitucion')->get();
        $i = 0;
        $pdf = PDF::loadView('pdf/proyecto/list', compact('mntProyectos', 'i'))->setPaper('a4', 'landscape');
        return $pdf->download('listado.pdf');
    }
}
