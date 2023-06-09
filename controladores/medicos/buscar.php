<?php

require '../../modelos/Medico.php';
require_once '../../modelos/Especialidad.php';
require_once '../../modelos/Clinica.php';
try {
    $medico = new Medico($_GET);
    $especialidad = new Especialidad();
    $clinica = new Clinica();
    $medicos = $medico->buscar();
    $especialidades = $especialidad->buscar();
    $clinicas = $clinica->buscar();
    
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Resultados de busqueda</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NO. </th>
                            <th>NOMBRE</th>
                            <th>ESPECIALIDAD</th>
                            <th>CLINICA</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($medicos) > 0):?>
                        <?php foreach($medicos as $key => $medico) : ?>
                            <?php
 tr>                           // Obtener la especialidad del médico
                            $especialidad = $especialidades[$key];
        
                            // Obtener la clínica del médico
                            $clinica = $clinicas[$key];
                            ?>
                        <
                            <td><?= $key + 1 ?></td>
                            <td><?= $medico['MED_NOMBRE'] ?></td>
                            <td><?= $especialidad['ESP_NOMBRE'] ?></td>
                            <td><?= $clinica['CLIN_NOMBRE'] ?></td>
                            <td><a class="btn btn-warning w-100" href="/final_perez/vistas/medicos/modificar.php?med_id=<?= $medico['MED_ID']?>">Modificar</a></td>
                            <td><a class="btn btn-danger w-100" href="/final_perez/controladores/medicos/eliminar.php?med_id=<?= $medico['MED_ID']?>">Eliminar</a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php else :?>
                            <tr>
                                <td colspan="3">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/final_perez/vistas/medicos/buscar.php" class="btn btn-info w-100">Regresar a la busqueda</a>
            </div>
        </div>
    </div>
</body>
</html>