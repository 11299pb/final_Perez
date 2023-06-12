<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../../modelos/Cita.php';

    try {
   
   $fecha = date('d/m/Y');
   $buscar = new Cita();

   $busqueda= $buscar->busqueda();

    } catch (PDOException $e) {
        $error = $e->getMessage();
    } 
?>
<br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 table-responsive">
                <table class="table table-bordered custom-bordered-table">
                    <thead>
                        <tr class="text-center table-primary">
                            
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center table-dark">
                        <td colspan="6"><center>CITAS PARA EL DÍA DE HOY (<?= $fecha ?>)</center></td>
                    </tr>
                    <?php if (!empty($busqueda)): ?>
                        <?php $clinicaActual = ''; $medicoActual = ''; ?>
                        <?php foreach ($busqueda as $key => $fila) : ?>
                            <?php if ($clinicaActual != $fila['CLIN_NOMBRE'] || $medicoActual != $fila['MED_NOMBRE']): ?>
                                <?php if ($key > 0): ?>
                                    </tbody>
                                    </table>
                                <?php endif; ?>
                                <table class="table table-pink">
                                    <thead>
                                        <tr class="text-center table-pink">
                                            <th colspan="6">CLÍNICA: <?= $fila['CLIN_NOMBRE'] ?> (<?= $fila['MED_NOMBRE'] ?>)</th>
                                        </tr>
                                        <tr class="text-center table-secundary">
                                            <th>NO</th>
                                            <th>PACIENTE</th>
                                            <th>DPI</th>
                                            <th>TELÉFONO</th>
                                            <th>HORA DE LA CITA</th>
                                            <th>REFERIDO (SI/NO)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php endif; ?>
                            <tr class="text-center table-secondary">
                                <td><?= $key + 1 ?></td>
                                <td><?= $fila['PACI_NOMBRE'] ?></td>
                                <td><?= $fila['PACI_DPI'] ?></td>
                                <td><?= $fila['PACI_TELEFONO'] ?></td>
                                <td><?= $fila['CIT_HORA'] ?></td>
                                <td><?= $fila['CIT_REFERENCIA'] ?></td>
                            </tr class="text-center table-primary">
                            <?php $clinicaActual = $fila['CLIN_NOMBRE']; $medicoActual = $fila['MED_NOMBRE']; ?>
                        <?php endforeach ?>
                        </tbody>
                        </table>
                    <?php else: ?>
                        <tr>
                            <td colspan="6"><center>SIN CITAS</center></td>
                        </tr>
                    <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include_once '../../includes/footer.php'?>
<center>
<div class="row">
        <div class="col-lg-12">
            <a href="/final_perez/vistas/citas/index.php" class="btn btn-info">Regresar al formulario</a>
        </div>
    </div></center>