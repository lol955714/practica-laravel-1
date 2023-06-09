@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Ctl Fuente Fondo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Fuente Fondo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ctl-fuente-fondos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ctl-fuente-fondo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
