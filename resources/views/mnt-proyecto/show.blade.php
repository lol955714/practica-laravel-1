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
                            <span class="card-title">{{ __('Show') }} Mnt Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mnt-proyectos.index') }}"> {{ __('Back') }}</a>
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
                            {{ $mntProyecto->id_establecimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Id Fuente Fondos:</strong>
                            {{ $mntProyecto->id_fuente_fondos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado Proyecto:</strong>
                            {{ $mntProyecto->id_estado_proyecto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
