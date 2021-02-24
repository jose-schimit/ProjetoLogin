
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo2.css">
		<link rel="stylesheet" type="text/css" href="fontawesome.css">
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	</head>
	<body>
		<div class="container">
			<div class="divFrm">
				<div class="titulo">
					<h1>Sing in</h1>
					<hr>
				</div>
				<form method="post" action="altenticar.php">
					<div class="campos">
						<i class="fa fa-user"></i>
						<input type="text" placeholder="Email">
					</div>
					<div class="campos">
						<i class="fa fa-lock"></i>
						<input type="text" placeholder="Senha">
					</div>
					
					<div class="text-danger msgErro" id="msg">
						<p>Senha ou email inválido(s)</p>
					</div>
					<?php
						if(isset($_GET['login']) && $_GET['login'] == 'erro'){
						
					?> 
					<script type="text/javascript">
						document.querySelector('.msgErro').style.opacity = '100%';
					</script>
					<?php } ?>
					<button class="btn btn-primary btn-lg" type="submit">Login</button>
				</form>
				<div style="text-align: center;">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</body>
</html>