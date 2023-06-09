@extends('layouts.app')

@section('template_title')
    {{ $ctlInstitucion->name ?? "{{ __('Show') Ctl Institucion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Institucion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ctl-institucion.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ctlInstitucion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $ctlInstitucion->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $ctlInstitucion->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $ctlInstitucion->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $ctlInstitucion->email }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $ctlInstitucion->color }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ctlInstitucion->estado ? 'Activo' : 'Inactivo' }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
