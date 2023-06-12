<?php

require '../../modelos/Medico.php';
require '../../modelos/Especialidad.php';
require '../../modelos/Clinica.php';

try {
    if(isset($_GET['med_id']) && $_GET['med_id'] != ''){

        $medic_id = $_GET['med_id'];
        $medico = new Medico(["med_id" => $medic_id]);

        $especialidad = new Especialidad($_GET);
        $clinica = new Clinica($_GET);

        $medicos = $medico->buscar(); 
        $especialidades = $especialidad->buscar(); 
        $clinicas = $clinica->buscar(); 

    }
       
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar Medicos</h1>
        <div class="row justify-content-center">
            <form action="/final_perez/controladores/medicos/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="med_id" value="<?= $medicos[0]['MED_ID'] ?>">
                <div class="row mb-3">
                    <div class="col">
                        <label for="med_nombre">Nombre del medico</label>
                        <input type="text" name="med_nombre" id="med_nombre" value="<?= $medicos[0]['MED_NOMBRE'] ?>" class="form-control" required>
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
                        <label for="med_clinica">Clinica</label>
                        <select name="med_clinica" id="med_clinica" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($clinicas as $key => $clinica) : ?>
                                <option value="<?= $clinica['CLIN_ID'] ?>"><?= $clinica['CLIN_NOMBRE'] ?></option>
                            <?php endforeach?>
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