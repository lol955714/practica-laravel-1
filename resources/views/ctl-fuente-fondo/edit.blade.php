@extends('layouts.app')

@section('template_title')
    {{ __('Actualizar') }} Fuente Fondo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Fuente Fondo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ctl-fuente-fondos.update', $ctlFuenteFondo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ctl-fuente-fondo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
