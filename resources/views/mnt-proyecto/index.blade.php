@extends('layouts.app')

@section('template_title')
    Mnt Proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mantenimiento de Proyectos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mnt-proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Establecimiento</th>
										<th>Fuente Fondos</th>
										<th>Estado Proyecto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mntProyectos as $mntProyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $mntProyecto->nombre }}</td>
											<td>{{ $mntProyecto->codigo }}</td>
											<td>{{ $mntProyecto->descripcion }}</td>
											<td>{{ $mntProyecto->color }}</td>
											<td>{{ $mntProyecto->icono }}</td>
											<td>{{ $mntProyecto->ctlInstitucion->nombre }}</td>
											<td>{{ $mntProyecto->ctlFuenteFondo->nombre }}</td>
											<td>{{ $mntProyecto->ctlEstadoProyecto->nombre }}</td>

                                            <td>
                                                <form action="{{ route('mnt-proyectos.destroy',$mntProyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mnt-proyectos.show',$mntProyecto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mnt-proyectos.edit',$mntProyecto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $mntProyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
