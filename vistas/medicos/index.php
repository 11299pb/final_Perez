<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../modelos/Especialidad.php';
require_once '../../modelos/Clinica.php';
try {
    $especialidad = new Especialidad();
    $clinica = new Clinica();
    $especialidades = $especialidad->buscar();
    $clinicas = $clinica->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}
?>
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <BR><div class="container">
       
        <div class="row justify-content-center">
            <form action="/final_perez/controladores/medicos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3" style="font-family: 'Arial', sans-serif; color: #333;">
                <div class="row mb-3">
                <h1 class="text-center" style="font-family: 'Arial', sans-serif; color: #333;">Formulario de ingreso de Médicos</h1>
                    <div class="col">
                        <label for="med_nombre">Nombre del médico</label>
                        <input type="text" name="med_nombre" id="med_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="med_especialidad">Especialidad</label>
                        <select name="med_especialidad" id="med_especialidad" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($especialidades as $key => $especialidad) : ?>
                                <option value="<?= $especialidad['ESP_ID'] ?>"><?= $especialidad['ESP_NOMBRE'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="med_clinica">Clínica</label>
                        <select name="med_clinica" id="medico_clinica" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($clinicas as $key => $clinica) : ?>
                                <option value="<?= $clinica['CLIN_ID'] ?>"><?= $clinica['CLIN_NOMBRE'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100" style="background-color: #337ab7; border-color: #337ab7;">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>
<style>
    body {
        background-color: #f8f9fa;
    }
    .form-control {
        border-color: #ced4da;
    }
    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
</
