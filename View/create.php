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
            <!--Formulário-->
            <div class="form">
                <form action="/cadastro" method="POST">
                    
                    <label for="name"> Nome: </label>
                    <input type="text" id="nome" name="nome">
                    
                    <label for="email"> Email: </label>
                    <input type="email" id="email" name="email">
                    
                    <label for="data"> Data de Nascimento: </label>
                    <input type="date" id="dt_nasc" name="dt_nasc">

                    <div class="Cadastro">
                        <button type="submit" value="button" class="Cadastro">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>