	<?php 
	include('link.php');
	session_start();

	$livro_id = isset($_GET['livro_id'])?$_GET['livro_id']:null;
	$query_livro = "SELECT * FROM livros WHERE livro_id = '$livro_id'";
	$select_livro = mysqli_query($link, $query_livro);
	$array_livro = mysqli_fetch_array($select_livro);

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
		
			
				<div class="corpo col-md-12">
					<div class="container">
						<br><br>
						<h3 class="text-center"><?php  print_r($array_livro['titulo']); ?></h3>
						<br><br>
						<?php  print_r($array_livro['texto']); ?>
					</div>
				</div>
			
			</div>
		</div>		
	
