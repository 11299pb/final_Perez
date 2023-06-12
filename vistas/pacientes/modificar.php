<?php
require '../../modelos/Paciente.php';
try {
    if(isset($_GET['paci_id']) && $_GET['paci_id'] != ''){

        $paci_id = $_GET['paci_id'];
        $paciente = new Paciente(["paci_id" => $paci_id]);
        $pacientes = $paciente->buscar(); }
       
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">MODIFICACION DE PACIENTES</h1>
        <div class="row justify-content-center">
            <form action="/final_perez/controladores/pacientes/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="paci_id" value="<?= $pacientes[0]['PACI_ID'] ?>">

                <div class="row mb-3">
                    <div class="col">
                        <label for="paci_nombre">NOMBRE DEL PACIENTE</label>
                        <input type="text" name="paci_nombre" id="paci_nombre" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paci_dpi">NUMERO DE DPI</label>
                        <input type="text" name="paci_dpi" id="paci_dpi" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paci_telefono">NUMERO DE TELEFONO</label>
                        <input type="text" name="paci_telefono" id="paci_telefono" class="form-control" required>
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