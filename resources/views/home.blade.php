@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @auth
            @if (Route::is('home') || Route::is('/'))
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card mt-4">
                            <div class="card-header">{{ __('Accesos directos') }}</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('ctl-fuente-fondos.index') }}" class="btn btn-primary">{{ __('Catálogo de fuentes de fondos') }}</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('ctl-estado-proyectos.index') }}" class="btn btn-primary">{{ __('Catálogo de estados de proyecto') }}</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('ctl-institucion.index') }}" class="btn btn-primary">{{ __('Catálogo de instituciones') }}</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('mnt-proyectos.index') }}" class="btn btn-primary">{{ __('Mantenimiento de proyectos') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endauth
        </div>
    </div>
</div>
@endsection
