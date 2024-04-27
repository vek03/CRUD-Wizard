<?php
    require_once '../vendor/autoload.php';
    use App\Controller\ClienteController;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Wizard</title>
    <script>
		function confirmDelete(delUrl) {
  			if (confirm("Deseja apagar o registro?")) {
   				document.location = delUrl;
	        }  
		}
	</script>
</head>

<body>
    <!--Barra de Navegação (navBar)-->
    <div class="navbar">
        <a href="">Cadastro</a>
        <a href="">Consultar</a>
    </div>

    <!--Container-->
    <div class="container">
        <!--Tabela-->
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data de Nascimento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!--Nome-->
                        <td></td>
                        <!--Email-->
                        <td></td>
                        <!--Data de Nascimento-->
                        <td></td>
                        <!--Buttons-->
                        <td>
                            <!--Formulário para editar os dados do cadastro-->
                            <form action="" method="">
                                <button type="submit">Editar</button>
                            </form>

                            <!--Formulário para excluir os dados do cadastro-->      
                            <form action="" method="">
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>   
</body>
</html>