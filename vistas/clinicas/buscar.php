<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <br><h1 class="text-center" style="font-family: Arial, sans-serif; color: #4c586f;">BUSCAR DE CLINICAS</h1><br>
        <div class="row justify-content-center">
            <form action="/final_perez/controladores/clinicas/buscar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="clin_nombre" style="font-family: Arial, sans-serif; color: #4c586f; font-weight: bold;">Nombre de la Clínica</label>
                        <input type="text" name="clin_nombre" id="clin_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100" style="background-color: #4c586f; border-color: #4c586f; font-family: Arial, sans-serif;">Buscar</button>
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
</style>
