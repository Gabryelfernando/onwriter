 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

 <div id="cadastrar">
        <a href="index.php"><img src="logo.jpg" class="logo-alinha"></a>
        <div class="container">
            <div id="cadastrar-row" class="row justify-content-center align-items-center">
                <div id="cadastrar-column" class="col-md-6">
                    <div id="cadastrar-box" class="col-md-12">
                        <form id="cadastrar-form" class="form" action="control/registrar.php" method="post">
                            <h3 class="text-center ">Registrar</h3>
                            <div class="form-group">
                                <label for="nome">Nome</label><br>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="login">Login:</label><br>
                                <input type="text" name="login" id="login" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label><br>
                                <input type="text" name="senha" id="senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="cadastrar" class="btn btn-info" value="cadastrar">Cadastrar</button>
                            </div>
                            <div id="voltar" class="text-right">
                                <a href="login.php">Voltar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>