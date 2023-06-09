@extends('layouts.app')

@section('template_title')
    Ctl Fuente Fondo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Catálogo de fuentes de fondo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ctl-fuente-fondos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>
										<th>Codigo</th>
										<th>Descripcion</th>
										<th>Color</th>
										<th>Icono</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ctlFuenteFondos as $ctlFuenteFondo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $ctlFuenteFondo->nombre }}</td>
											<td>{{ $ctlFuenteFondo->codigo }}</td>
											<td>{{ $ctlFuenteFondo->descripcion }}</td>
											<td>{{ $ctlFuenteFondo->color }}</td>
											<td>{{ $ctlFuenteFondo->icono }}</td>
											<td>{{ $ctlFuenteFondo->estado }}</td>

                                            <td>
                                                <form action="{{ route('ctl-fuente-fondos.destroy',$ctlFuenteFondo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ctl-fuente-fondos.show',$ctlFuenteFondo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ctl-fuente-fondos.edit',$ctlFuenteFondo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ctlFuenteFondos->links() !!}
            </div>
        </div>
    </div>
@endsection
