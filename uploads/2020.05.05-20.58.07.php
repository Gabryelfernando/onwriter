	<head>
		<title>OnWriter</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

		<header>
			<nav class="navbar">
					<div>
						<a href="index.php"><img src="logo.jpg"></a>
					</div>

					<div>
						<?php session_start(); if(isset($_SESSION['login'])):?>
                    		<a  href="perfil.php" class="header-text"><b><?php print_r($_SESSION['login']);?></b></a>
                    		<a  href="logout.php" class="header-text"><b>Logout</b></a>
                    	<?php else: ?>
                    		<?php echo"<script language='javascript' type='text/javascript'>
								        alert('Logado com Sucesso');window.location
								        .href='http://localhost/onwriter/index.php';</script>";?>
                   		<?php endif ?>
					</div>
					

			</nav>	

		</header>

		<div class="container">
			<div><br></div>
			<form class="form" action="control/escreva.php" method="post">
				<div class="form-group">
					<label><b><h3>Escreva seu Livro:</h3></b></label>
					<textarea type="text" name="texto" id="texto" classe="form-control" rows="20" style="width: 100%;"required></textarea>
				</div>
				<div class="form-group">
                    <label for="titulo">Titulo:</label><br>
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="paginas">Quantidade de Paginas:</label><br>
                    <input type="number" name="paginas" id="paginas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="data">Data do livro:</label><br>
                    <input type="date" name="data" id="data" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="genero">Genero:</label><br>
                    <select type="text" name="genero" id="genero" class="form-control" required>
                    	<option selected>Drama</option>
                    	<option>Ação</option>
                    	<option>Romançe</option>
                    	<option>Aventura</option>
                    	<option>Comedia</option>
                    	<option>Documentario</option>
                    	<option>Fantasia</option>
                    	<option>Ficção-Cientifica</option>
                    	<option>Infantil</option>
                    	<option>Suspense</option>
                    	<option>Terror</option>
                    </select>
                </div>
                <div class="col-sm-10 col-sm-2 pt-0">
	                <div class="form-check">
	                	<input type="radio" name="finalizado" id="finalizado1" value="Finalizado" class="form-check-input">
	                	<label class="form-check-label" for="finalizado1">Finalizado</label>
	                	<br>
	                	<input type="radio" name="finalizado" id="finalizado2" value="Não Finalizado" class="form-check-input">
	                	<label class="form-check-label" for="finalizado2">Não finalizado</label>
	                </div>
	            </div>
	            <br><br>
	            <div class="form-group">
	            	<button type="submit" name="salvar" class="btn btn-info">Salvar</button>
	            </div>
                
			</form>
		</div>