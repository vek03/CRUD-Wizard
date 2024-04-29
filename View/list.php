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
    <script>
		function confirmDelete(delUrl) {
  			if (confirm("Deseja apagar o registro?")) {
   				document.location = delUrl;
	        }  
		}
	</script>
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
                                $controller = new ClienteController();
                                $clientes = $controller->readAll();

                                if($clientes)
                                {
                                    foreach($clientes as $cliente){
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
                                    <!--Formulário para editar os dados do cadastro-->
                                    
                                        <button class="Consultar" type="button"><a href="/editar?cliente=<?php echo $cliente->getCliente_Id() ?>">Editar</a></button>
                                    
        
                                    <!--Formulário para excluir os dados do cadastro-->
                                   
                                        <button class="Consultar" type="button" onclick="javascript:confirmDelete('/deletar?cliente=<?php echo $cliente->getCliente_Id() ?>')">Excluir</button>
                        
                                </div>
                            </td>
                        </tr>
                            <?php
                                }
                            }
                            else{
                                echo "<th colspan='4'>Nenhum Registro</th>";
                            }
                            ?>   
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>