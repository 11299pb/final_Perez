<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        
       <BR> <div class="row justify-content-center">
           <BR> <form action="/final_perez/controladores/pacientes/buscar.php" method="GET" class="col-lg-8 border bg-light p-3" style="font-family: 'Helvetica', sans-serif; color: #4d4d4d;">
                <div class="row mb-3">
                    <div class="col">
                    <h1 class="text-center" style="font-family: 'Helvetica', sans-serif; color: #4d4d4d;">BUSCAR PACIENTE</h1>
                        <label for="paci_nombre" style="color: #4d4d4d;">Nombre del paciente</label>
                        <input type="text" name="paci_nombre" id="paci_nombre" class="form-control" style="border-color: #6c757d;">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paci_dpi" style="color: #4d4d4d;">No. de DPI</label>
                        <input type="text" name="paci_dpi" id="paci_dpi" class="form-control" style="border-color: #6c757d;">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100" style="background-color: #17a2b8; border-color: #17a2b8;">Buscar</button>
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
