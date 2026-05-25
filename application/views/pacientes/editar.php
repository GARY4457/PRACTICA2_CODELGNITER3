<!DOCTYPE html>
<html>
<head>

    <title>Editar Paciente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-info text-white">
            <h2>Editar Paciente</h2>
        </div>

        <div class="card-body">

            <form method="post"
            action="<?php echo site_url('pacientes/actualizar/'.$paciente->id); ?>">

                <div class="mb-3">

                    <label>Nombre Completo</label>

                    <input type="text"
                    name="nombre_completo"
                    class="form-control"
                    value="<?php echo $paciente->nombre_completo; ?>"
                    required>

                </div>

                <div class="mb-3">

                    <label>Diagnostico</label>

                    <input type="text"
                    name="diagnostico"
                    class="form-control"
                    value="<?php echo $paciente->diagnostico; ?>"
                    required>

                </div>

                <div class="mb-3">

                    <label>Fecha Ingreso</label>

                    <input type="date"
                    name="fecha_ingreso"
                    class="form-control"
                    value="<?php echo $paciente->fecha_ingreso; ?>"
                    required>

                </div>

                <button type="submit" class="btn btn-primary">
                    Actualizar
                </button>

                <a href="<?php echo site_url('pacientes'); ?>"
                class="btn btn-secondary">
                    Volver
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>