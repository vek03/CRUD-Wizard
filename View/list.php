<?php
    require_once '../vendor/autoload.php';
    use App\Controller\ClienteController;
?>

<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css" />
    <title>Wizard</title>
</head>

<body>
    <!-- NAVBAR -->
    <div class="navbar">
        <div class="container-xxl">
            <div class="center">
                <img src="../public/img/wiz.png" alt="Logo do Wizard" class="Wizardimg">
            </div>
        
            <div class="navbar">
                <a href="/">Cadastro</a>
                <a href="/consulta">Consulta</a>
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
            <!--Tabela-->
            <div>
                <table>
                    <thead>
                        <tr>
                            <th class="AzulAbisal">Nome</th>
                            <th class="AzulAbisal">Email</th>
                            <th class="AzulAbisal">Data de Nascimento</th>
                            <th class="AzulAbisal">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!--Nome-->
                            <td class="AzulEscuro"><b>John Lemom</b></td>
                            <!--Email-->
                            <td class="AzulEscuro"><b>john@example.com</b></td>
                            <!--Data de Nascimento-->
                            <td class="AzulEscuro"><b> 01/01/1990 </b></td>
                            <!--Buttons-->
                            <td>
                                <div class="form-buttons">
                                    <!--Formulário para editar os dados do cadastro-->
                                    <form action="" method="">
                                        <button class="Consultar" type="submit"><a href="../View/edit.php">Editar</a></button>
                                    </form>
        
                                    <!--Formulário para excluir os dados do cadastro-->
                                    <form action="" method="">
                                        <button class="Consultar" type="submit">Excluir</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

</body>

</html>