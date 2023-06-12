<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <br><div class="container">
        
        <div class="row justify-content-center">
            <form action="/final_perez/controladores/pacientes/guardar.php" method="POST" class="col-lg-8 border bg-light p-3" style="font-family: 'Arial', sans-serif; color: #333;">
                <div class="row mb-3">
                    <div class="col">
                    <h1 class="text-center" style="font-family: 'Arial', sans-serif; color: #333;">FORMULARIO INGRESO DE PACIENTES</h1>
                        <BR><label for="paci_nombre" style="color: #333;">Nombre del paciente</label>
                        <input type="text" name="paci_nombre" id="paci_nombre" class="form-control" style="border-color: #ced4da;">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paci_dpi" style="color: #333;">No. de DPI</label>
                        <input type="text" name="paci_dpi" id="paci_dpi" class="form-control" style="border-color: #ced4da;">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paci_telefono" style="color: #333;">No. de teléfono</label>
                        <input type="text" name="paci_telefono" id="paci_telefono" class="form-control" style="border-color: #ced4da;">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100" style="background-color: #17a2b8; border-color: #17a2b8;">Guardar</button>
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
</style>
