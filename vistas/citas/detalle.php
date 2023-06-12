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
                            <th colspan="6">HOSPITAL "LA ESPERANZA" CITAS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center table-primary">
                            <td colspan="6"><center>CITAS PARA EL DIA DE HOY (<?= $fecha?>) </center></td>
                            
                        </tr>
                        </tr>
                        <tr class="text-center table-dark">
                            <td colspan="6"><?= $busqueda[1]['CLINICA_NOMBRE'] ?>(DOCTOR <?= $busqueda[1]['MEDICO_NOMBRE'] ?>)</td>
                        </tr>
                        <tr class="text-center table-light">
                            <th>NO.</th>
                            <th>PACIENTE</th>
                            <th>DPI</th>
                            <th>TELEFONO</th>
                            <th>HORA DE LA CITA</th>
                            <th>REFERIDO SI / NO</th>
                        </tr >
                        <?php if (!empty($busqueda) && count($busqueda) > 0) : ?>
                            <?php $citasEncontradas = false; ?>
                            <?php foreach($busqueda as $key => $fila) : ?>
                                <?php if ($fila['CITA_MEDICO'] == 1 && $fila['MEDICO_CLINICA'] = 1) : ?>
                                    <?php $citasEncontradas = true; ?>
                                    <tr class="text-center table-secondary">
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $fila['PACIENTE_NOMBRE'] ?></td>
                                        <td><?= $fila['PACIENTE_DPI'] ?></td>
                                        <td><?= $fila['PACIENTE_TELEFONO'] ?></td>
                                        <td><?= $fila['CITA_HORA'] ?></td>
                                        <td><?= $fila['CITA_REFERENCIA'] ?></td>
                                    </tr>
                                <?php endif ?>
                            <?php endforeach ?>
                            <?php if (!$citasEncontradas) : ?>
                                <tr class="text-center table-secondary">
                                    <td colspan="6"><center>SIN CITAS</center></td>
                                </tr>
                            <?php endif ?>
                        <?php else : ?>
                            <tr class="text-center table-secondary">
                                <td colspan="6"><center>SIN CITAS</center></td>
                            </tr>
                        <?php endif ?>
                            <td colspan="6"><center>CITAS PARA EL DIA DE HOY (<?= $fecha?>) </center></td>
                            
                        </tr>
                        <tr class="text-center table-dark">
                            <td colspan="6"><?= $busqueda[0]['CLIN_NOMBRE'] ?>(<?= $busqueda[0]['MED_NOMBRE'] ?>)</td>
                        </tr>
                        <tr>
                            <th>NO.</th>
                            <th>PACIENTE</th>
                            <th>DPI</th>
                            <th>TELEFONO</th>
                            <th>HORA DE LA CITA</th>
                            <th>REFERIDO SI / NO</th>
                        </tr>
                

                        <?php 
                            foreach($busqueda as $key => $fila) : ?>
                        <?php if( $fila['CIT_FECHA'] == date('Y-d-m')) { ?>
                        <tr>
                        
                            <td><?= $key + 1 ?></td>
                            <td><?= $fila['PACI_NOMBRE'] ?></td>
                            <td><?= $fila['PACI_DPI'] ?></td>
                            <td><?= $fila['PACI_TELEFONO'] ?></td>
                            <td><?= $fila['CIT_FECHA'] ?></td>
                            <td><?= $fila['CIT_REFERENCIA'] ?></td>
                        </tr>
                        <?php  } ?>
                        <?php endforeach ?>


                        <tr class="text-center table-dark">
                            <td colspan="6"><?= $busqueda[2]['CLIN_NOMBRE'] ?>(<?= $busqueda[2]['MED_NOMBRE'] ?>)</td>
                        </tr>
                        <tr>
                            <th>NO.</th>
                            <th>PACIENTE</th>
                            <th>DPI</th>
                            <th>TELEFONO</th>
                            <th>HORA DE LA CITA</th>
                            <th>REFERIDO SI / NO</th>
                        </tr>
                

                        <?php foreach($busqueda as $key => $fila) : ?>
                        <?php if( $fila['CITA_FECHA'] == date('Y-d-m')) { ?>
                        <tr>
                        
                            <td><?= $key + 1 ?></td>
                            <td><?= $fila['PACI_NOMBRE'] ?></td>
                            <td><?= $fila['PACI_DPI'] ?></td>
                            <td><?= $fila['PACI_TELEFONO'] ?></td>
                            <td><?= $fila['CIT_FECHA'] ?></td>
                            <td><?= $fila['CIT_REFERENCIA'] ?></td>
                        </tr>
                        <?php  } ?>

                        <?php endforeach ?>
                       
                        <tr>
                            <td colspan="6"><center>SIN CITAS</center></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <center><a href="/final_perez/vistas/citas/index.php" class="btn btn-info">Regresar al formulario</a></center>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>