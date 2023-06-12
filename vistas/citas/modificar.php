<?php
require '../../modelos/Cita.php';
require_once '../../modelos/Paciente.php';
require_once '../../modelos/Medico.php';
    try {
        $cita = new cit($_GET);
        $paciente = new Paciente();
        $medico = new Medico();
        $pacientes = $paciente->buscar();
        $medicos = $medico->buscar();
        $citas = $cita->buscar();
       
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar cita</h1>
        <div class="row justify-content-center">
            <form action="/final_perez/controladores/citas/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="cit_id">
                <div class="row mb-3">
                    <div class="col">
                        <label for="cit_paciente">Nombre del paciente</label>
                        <select name="cit_paciente" id="cit_paciente" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($pacientes as $key => $paciente) : ?>
                                <option value="<?= $paciente['PACI_ID'] ?>"><?= $paciente['PACI_NOMBRE'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cit_medico">Medico asignado</label>
                        <select name="cit_medico" id="cit_medico" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($medicos as $key => $medico) : ?>
                                <option value="<?= $medico['MED_ID'] ?>"><?= $medico['MED_NOMBRE'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cit_fecha">Fecha de la cita</label>
                        <input type="datetime-local" value="<?= date('Y-m-d\TH:i') ?>" name="cit_fecha" id="cit_fecha" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cit_hora">Horario</label>
                        <input type="time" value="<?= date('H:i') ?>" name="cit_hora" id="cit_hora" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cit_referencia">¿Tiene referencia? </label>
                        <select name="cit_referencia" id="cit_referencia" class="form-control">
                            <option value="si">si</option>
                            <option value="no">no</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>