<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">INGRESO DE CLINICAS</h1>
        <div class="row justify-content-center">
            <form action="/final_perez/controladores/clinicas/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="clin_nombre" class="form-label">Nombre de la Clínica</label>
                        <input type="text" name="clin_nombre" id="clin_nombre" class="form-control">
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
<style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        margin-top: 50px;
    }
    .form-label {
        color: #495057;
        font-weight: bold;
    }
    .form-control {
        border-color: #ced4da;
    }
    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .btn-primary {
        background-color: #00c853;
        border-color: #00c853;
    }
    .btn-primary:hover {
        background-color: #00e676;
        border-color: #00e676;
    }
</style>
