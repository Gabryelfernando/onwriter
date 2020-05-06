	<?php 
	include('link.php');
	session_start();

	$id = $_SESSION['user_id'];
	$query = "SELECT * FROM usuario WHERE user_id = '$id'";
	$select = mysqli_query($link, $query);
	$array = mysqli_fetch_array($select);

	$query_livro = "SELECT * FROM livros WHERE fk_autor = '$id'";
	$select_livro = mysqli_query($link, $query_livro);

	 ?>

	<head>
		<title>OnWriter</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<nav class="navbar">
					<div>
						<a href="index.php"><img src="logo.jpg"></a>
					</div>

					<div>
						<?php  if(isset($_SESSION['login'])):?>
							<a href="escreva.php" class="header-text"><b>Escreva</b></a>
                    		<a  href="perfil.php" class="header-text"><b><?php print_r($_SESSION['login']);?></b></a>
                    		<a  href="logout.php" class="header-text"><b>Logout</b></a>
                    	<?php else: ?>
                    		<a href="login.php" class="header-text"><b>Login</b></a>
                   		<?php endif ?>
					</div>
					

			</nav>	

		</header>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="corpo-perfil col-md-8">
					<div class="container">
						<br>
						<h3>Meus Livros</h3>
						<div>
							<?php while ($array_livro = $select_livro->fetch_array()) { ?>
								<?php  
									$livro_id = $array_livro['livro_id'];
								?>

							<div class="livro-layout">	
								<figure>
									<a href="meuslivros.php?livro_id=<?=$livro_id?>"><img src="img-livro.jpg"></a>
									<figcaption><b> &nbsp &nbsp &nbsp &nbsp <?php print_r($array_livro['titulo'])?>&nbsp <a href="excluir.php?livro_id=<?=$livro_id?>">Exluir(x)</a></b></figcaption>
								</figure>
							</div>
							<?php } ?>
						</div>


					</div>
					
				</div>
			
				<div class="perfil-lado col-md-4">
					<div class="container">
						<div>
							<br><br>
							<h3>Nos envie sua propaganda</h3>
							<form action="uploads.php" method="POST" enctype="multipart/form-data">
      							<input type="file" name="fileUpload">
     							<input type="submit" value="Enviar">
   							</form>
						</div>
						<form id="login-form" class="form" action="control/update-perfil.php" method="get">
							<br>
                            <h3>Perfil</h3>
                            <div class="form-group">
                                <label for="login">Login:</label><br>
                                <input type="text" name="login" id="login" class="form-control" value="<?php print_r($array['login']);?>">
                            </div>
                            <div class="form-group">
                                <label for="nome">Nome:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control" value="<?php print_r($array['nome']);?>">
                            </div>
                            <div><br></div>
                            <div class="form-group">
                                <input type="submit" name="alterar" class="btn btn-info" value="Alterar">
                            </div>
                        </form>
					</div>
				</div>
			
			</div>
		</div>		
	
