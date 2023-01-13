<?php
require "../server/config/connect.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Gestão de Presenças</title>
    <link rel="stylesheet" href="./assets/styles/output.css">
    <link rel="stylesheet" href="./assets/styles/form.css">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
			<div class="bg-[#6e48aa] text-white font-semibold flex justify-center my-4">
				<?php
					if(isset($_SESSION["auth"]) ) {
						echo $_SESSION["auth"];
						unset($_SESSION["auth"]);
					} 
				?>
			</div>
		<div class="pic">
			<i class="fas fa-user"></i>
		</div>
		<h2 class="title">Login</h2>
		<form class="form" method="POST" action="../server/src/login.php">
			<label for="username">Nome de Usuário</label>
			<input type="text" id="username" name="username" class="input" autocomplete="off" placeholder="Insira o nome de usuário" />
			<label for="password">Palavra-passe</label>
			<input type="password" id="password" name="password" class="input" autocomplete="off" placeholder="Insira a palavra-passe" />
			<button type="submit" class="button">Entrar</button>
		</form>
	</div>
</body>
</html>