 <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

 <div id="login">
        <a href="index.php"><img src="logo.jpg" class="logo-alinha"></a>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="control/login.php" method="post">
                            <h3 class="text-center">Login</h3>
                            <div class="form-group">
                                <label for="login">Login:</label><br>
                                <input type="text" name="login" id="login" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label><br>
                                <input type="text" name="senha" id="senha" class="form-control">
                            </div>
                            <div id="registrar" class="text-right">
                                <a href="registrar.php">Registrar-se</a>
                            </div>
                            <div><br></div>
                            <div class="form-group">
                                <input type="submit" name="entrar" class="btn btn-info" value="entrar">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>