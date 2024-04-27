<?php
    require_once '../vendor/autoload.php';

    use App\Model\Cliente;
    use App\Controller\ClienteController;

    $controller = new ClienteController();
    $cliente = new Cliente();

    $cliente->setCliente_Id($_GET['cliente']);
    $cliente = $controller->read($cliente);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VekSystem</title>

<body>
    <!-- NAVBAR -->
    <div class="navbar">
        <div class="container-xxl">
            <div class="center">
                <img src="/Imgs/wiz.png" alt="Logo do Wizard" class="Wizardimg">
            </div>
        
            <div class="navbar">
                <a href="/Index.html">Cadastro</a>
                <a href="/consultar.html">Consulta</a>
            </div> 
        </div>   
    </div>
        <!-- NAVBAR END -->


    <div class="row">
        <div class="col">
            &nbsp;
        </div>
    </div>
    <div class="row">
        <div class="col">
            &nbsp;
        </div>
    </div>


        <div class="container">
            <!--Formulário-->
            <div class="form">
                <form action="" method="">
                    
                    <label for="name"> Nome: </label>
                    <input type="text" id="name" name="name">
                    
                    <label for="email"> Email: </label>
                    <input type="email" id="email" name="email">
                    
                    <label for="data"> Data de Nascimento: </label>
                    <input type="date" id="data" name="data">

                    <div class="Cadastro">
                        <button type="submit" value="button" class="Cadastro">Editar</button>
                    </div>
                </form>
            </div>
        </div>

</body>
</html>