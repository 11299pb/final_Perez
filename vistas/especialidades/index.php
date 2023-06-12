<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">INGRESAR ESPECIALIDAD</h1>
        <div class="row justify-content-center">
            <form action="/final_perez/controladores/especialidades/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="esp_nombre" class="form-label">Especialidad</label>
                        <input type="text" name="esp_nombre" id="esp_nombre" class="form-control">
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
        background-color: #ff6f00;
        border-color: #ff6f00;
    }
    .btn-primary:hover {
        background-color: #ff8f00;
        border-color: #ff8f00;
    }
</style>
