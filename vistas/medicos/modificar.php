<?php
require '../../modelos/Medico.php';
try {
    if(isset($_GET['med_id']) && $_GET['med_id'] != ''){

        $med_id = $_GET['med_id'];
        $medico = new Medico(["med_id" => $med_id]);
        $medicos = $medico->buscar(); }
       
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
                        <input type="text" name="med_nombre" id="med_nombre" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="med_especialidad">Especialidad</label>
                        <input type="text" name="med_especialidad" id="med_especialidad" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="med_clinica">Clinica</label>
                        <input type="text" name="med_clinica" id="med_clinica" class="form-control" required>
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