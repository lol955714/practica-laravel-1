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
                        {{ $mntProyecto->nombre }}
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>Codigo:</strong>
                        {{ $mntProyecto->codigo }}
                    </div>
                    <div class="form-group">
                        <strong>Descripcion:</strong>
                        {{ $mntProyecto->descripcion }}
                    </div>
                    <div class="form-group">
                        <strong>Color:</strong>
                        {{ $mntProyecto->color }}
                    </div>
                    <div class="form-group">
                        <strong>Icono:</strong>
                        {{ $mntProyecto->icono }}
                    </div>
                    <div class="form-group">
                        <strong>Establecimiento:</strong>
                        {{ $mntProyecto->ctlInstitucion->nombre }}
                    </div>
                    <div class="form-group">
                        <strong>Fuente Fondos:</strong>
                        {{ $mntProyecto->ctlFuenteFondo->nombre }}
                    </div>
                    <div class="form-group">
                        <strong>Estado Proyecto:</strong>
                        {{ $mntProyecto->ctlEstadoProyecto->nombre }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
