<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>

	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />

	<style>
		.max-w-512px {
			max-width: 512px;
		}
	</style>
</head>

<body>
	<div class="min-vh-100 bg-dark d-flex flex-column justify-content-center align-items-center px-4">
		<form class="w-100 bg-light max-w-512px rounded p-4 gap-2 d-flex flex-column" method="POST" action="./api/register.php">
			<h1 class="fs-4">Cadastrar</h1>
			<input type="text" class="form-control" placeholder="Nome" name="name" required />
			<input type="number" class="form-control" placeholder="Matrícula" name="matriculation" required />
			<input type="password" class="form-control" placeholder="Senha" name="password" required />
			<button class="w-100 btn btn-primary">Cadastre-se</button>
			<a href="./login.php" class="text-decoration-none">Já possui uma conta? Entre</a>
		</form>
	</div>
</body>

</html>