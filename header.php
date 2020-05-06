	<?php 
	include('link.php');
	session_start();

	$query_livro = "SELECT * FROM livros";
	$select_livro = mysqli_query($link, $query_livro);

	 ?>
<!DOCTYPE html>


<html>

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
						<?php if(isset($_SESSION['login'])):?>
							<a href="escreva.php" class="header-text"><b>Escreva</b></a>
                    		<a  href="perfil.php" class="header-text"><b><?php print_r($_SESSION['login']);?></b></a>
                    		<a  href="logout.php" class="header-text"><b>Logout</b></a>
                    	<?php else: ?>
                    		<a href="login.php" class="header-text"><b>Login</b></a>
                   		<?php endif ?>
					</div>
					

			</nav>	

		</header>

		<div class="container-fluid col-md-12">
		      <img class="d-block w-100" src="img1.jpg">
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="corpo-perfil col-md-8">
					<?php while ($array_livro = $select_livro->fetch_array()) { ?>
								<?php  
									$livro_id = $array_livro['livro_id'];
								?>
								<div class="livro-layout">	
									<figure>
										<a href="verlivros.php?livro_id=<?=$livro_id?>"><img src="img-livro.jpg"></a>
										<figcaption><b> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php print_r($array_livro['titulo'])?></b></figcaption>
									</figure>
								</div>
							<?php } ?>
				</div>
			
				<div class="perfil-lado col-md-4">
					
					<img src="anuncie.jpg">
				</div>
			
			</div>
		</div>

