@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Ctl Estado Proyecto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Estado Proyecto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ctl-estado-proyectos.update', $ctlEstadoProyecto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ctl-estado-proyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
