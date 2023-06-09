@extends('layouts.app')

@section('template_title')
    Ctl Institucion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Catálogo de instituciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ctl-institucion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Email</th>
										<th>Color</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ctlInstitucions as $ctlInstitucion)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $ctlInstitucion->nombre }}</td>
											<td>{{ $ctlInstitucion->codigo }}</td>
											<td>{{ $ctlInstitucion->direccion }}</td>
											<td>{{ $ctlInstitucion->telefono }}</td>
											<td>{{ $ctlInstitucion->email }}</td>
											<td>{{ $ctlInstitucion->color }}</td>
											<td>{{ $ctlInstitucion->estado }}</td>

                                            <td>
                                                <form action="{{ route('ctl-institucion.destroy',$ctlInstitucion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ctl-institucion.show',$ctlInstitucion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ctl-institucion.edit',$ctlInstitucion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $ctlInstitucions->links() !!}
            </div>
        </div>
    </div>
@endsection
