<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
       
        <br><br><div class="row justify-content-center">
            <form action="/final_perez/controladores/medicos/buscar.php" method="GET" class="col-lg-8 border bg-light p-3" style="font-family: 'Arial', sans-serif; color: #333;">
                <div class="row mb-3">
                    <div class="col">
                    <h1 class="text-center" style="font-family: 'Arial', sans-serif; color: #333;">Buscar Médicos</h1>
                        <label for="med_nombre" style="color: #333;">Nombre del médico</label>
                        <input type="text" name="med_nombre" id="med_nombre" class="form-control" style="border-color: #ced4da;">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="med_clinica" style="color: #333;">Clínica Asignada</label>
                        <input type="text" name="med_clinica" id="med_clinica" class="form-control" style="border-color: #ced4da;">
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
