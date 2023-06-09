<!DOCTYPE html>
<html>
<head>
    <title>Detalle proyecto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="float-center">
                     <span id="card_title">
                                {{ __('Listado de proyectos') }}
                    </span>
                </div>
            </div>
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
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
