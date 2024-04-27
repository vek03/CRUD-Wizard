<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VekSystem</title>
    <link rel="shortcut icon" type="imagex/png" href="../public/img/bootstrap-logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="../public/img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web - MySQL
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Cadastro</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/consulta">Consulta</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Cadastro - Cliente</a>
                    </div>
                    </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col">
            <form method="POST" action="/cadastro" id="form" name="form-store" >
                <div class="row g-3">
                    
                        <div style="text-align: left;" class="col-md-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input autofocus type="text" placeholder="Alex" class="form-control" name="nome" required id="nome">
                        </div>

                        <div style="text-align: left;" class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" placeholder="example@gmail.com" class="form-control" name="email" required id="email">
                        </div>

                        <div style="text-align: left;" class="col-md-6">
                            <label for="dt_nasc" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="dt_nasc" required id="dt_nasc">
                        </div>

                        <div style="text-align: left;" class="col-12">
                            <button type="submit" id="btnCadastrar" class="btn btn-dark">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </div>    
</body>
</html>