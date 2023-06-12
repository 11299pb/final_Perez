<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario de ingreso de pacientes</h1>
        <div class="row justify-content-center">
            <form action="/final_perez/controladores/pacientes/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                    <label for="paci_nombre">Nombre del paciente</label>
                        <input type="text" name="paci_nombre" id="paci_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paci_dpi">No. de DPI</label>
                        <input type="text" name="paci_dpi" id="paci_dpi" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paci_telefono">No. de telefono</label>
                        <input type="text" name="paci_telefono" id="paci_telefono" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>