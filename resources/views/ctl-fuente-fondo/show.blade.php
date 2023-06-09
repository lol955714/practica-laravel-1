@extends('layouts.app')

@section('template_title')
    {{ $ctlFuenteFondo->name ?? "{{ __('Show') Ctl Fuente Fondo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Fuente Fondo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ctl-fuente-fondos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ctlFuenteFondo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $ctlFuenteFondo->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $ctlFuenteFondo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $ctlFuenteFondo->color }}
                        </div>
                        <div class="form-group">
                            <strong>Icono:</strong>
                            {{ $ctlFuenteFondo->icono }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ctlFuenteFondo->estado ? 'Activo' : 'Inactivo' }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
