<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css" />
    <link rel="icon" type="image/png" href="../public/img/wiz.png">
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
                        <?php
                            if($clientes)
                            {
                                foreach($clientes as $cliente)
                                {
                        ?>    
                                <tr>
                                    <!--Nome-->
                                    <td class="AzulEscuro"><b><?php echo $cliente->getNome(); ?></b></td>
                                    <!--Email-->
                                    <td class="AzulEscuro"><b><?php echo $cliente->getEmail(); ?></b></td>
                                    <!--Data de Nascimento-->
                                    <td class="AzulEscuro"><b> <?php echo $cliente->getDt_Nasc(); ?> </b></td>
                                    <!--Buttons-->
                                    <td>
                                        <div class="form-buttons">
                                            <a href="/editar?cliente=<?php echo $cliente->getCliente_Id() ?>">
                                                <button class="Consultar" type="button">Editar</button>
                                            </a>
                                            
                                            <form method="POST" onsubmit="return confirmDelete();" action="/deletar?cliente=<?php echo $cliente->getCliente_Id() ?>">
                                                <button class="Consultar" type="submit">Excluir</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                                }
                            }
                            else
                            {
                                echo "<th colspan='4'>Nenhum Registro</th>";
                            }
                        ?>   
                    </tbody>
                </table>
            </div>
        </div>
</body>
<script src="../public/js/script.js"></script>
</html>