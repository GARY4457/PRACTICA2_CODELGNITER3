<!DOCTYPE html>
<html>
<head>

    <title>Gestión Clnica</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color:#eaf4ff;">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-info text-white">
            <h2>Gestion Clinica - Pacientes</h2>
        </div>

        <div class="card-body">

            <form method="post" action="<?php echo site_url('pacientes/crear'); ?>">

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <input type="text" name="nombre_completo"
                        class="form-control"
                        placeholder="Nombre Completo" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <input type="text" name="diagnostico"
                        class="form-control"
                        placeholder="Diagnostico" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <input type="date" name="fecha_ingreso"
                        class="form-control" required>
                    </div>

                    <div class="col-md-1 mb-3">
                        <button type="submit" class="btn btn-primary w-100">
                            Guardar
                        </button>
                    </div>

                </div>

            </form>

            <hr>

            <table class="table table-bordered table-hover">

                <thead style="background-color:#0d6efd; color:white;">

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Diagnostico</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                <?php foreach($pacientes as $p){ ?>

                    <tr>

                        <td><?php echo $p->id; ?></td>

                        <td><?php echo $p->nombre_completo; ?></td>

                        <td><?php echo $p->diagnostico; ?></td>

                        <td><?php echo $p->fecha_ingreso; ?></td>

                        <td>

                            <a href="<?php echo site_url('pacientes/editar/'.$p->id); ?>"
                            class="btn btn-info text-white">
                                Editar
                            </a>

                            <a href="<?php echo site_url('pacientes/eliminar/'.$p->id); ?>"
                            class="btn btn-danger btn-sm">
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>