@extends('layouts.app')

@section('template_title')
    {{ $mntProyecto->name ?? "{{ __('Show') Mnt Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary"
                               href="{{ route('mnt-proyectos.index') }}"> {{ __('Regresar') }}</a>
                            <a class="btn btn-success "
                               href="{{ route('reporte.proyecto.pdf',$mntProyecto->id) }}"><i
                                    class="fa fa-fw fa-eye"></i> {{ __('Exportar a PDF') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mntProyecto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $mntProyecto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $mntProyecto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $mntProyecto->color }}
                        </div>
                        <div class="form-group">
                            <strong>Icono:</strong>
                            {{ $mntProyecto->icono }}
                        </div>
                        <div class="form-group">
                            <strong>Id Establecimiento:</strong>
                            {{ $mntProyecto->ctlInstitucion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Id Fuente Fondos:</strong>
                            {{ $mntProyecto->ctlFuenteFondo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado Proyecto:</strong>
                            {{ $mntProyecto->ctlEstadoProyecto->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
