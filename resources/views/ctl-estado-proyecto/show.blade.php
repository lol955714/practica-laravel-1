@extends('layouts.app')

@section('template_title')
    {{ $ctlEstadoProyecto->name ?? "{{ __('Show') Ctl Estado Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ctl Estado Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ctl-estado-proyectos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ctlEstadoProyecto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $ctlEstadoProyecto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $ctlEstadoProyecto->color }}
                        </div>
                        <div class="form-group">
                            <strong>Icono:</strong>
                            {{ $ctlEstadoProyecto->icono }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ctlEstadoProyecto->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
