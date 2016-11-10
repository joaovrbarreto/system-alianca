<?php
session_start();
if((isset ($_SESSION['user_id']) == true) and (isset ($_SESSION['user_name']) == true))
	{
		header('location:home.php');
	}
require_once 'config.php';
require_once 'header.php';
?>

<body>
	
	<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x"></h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form action="login.php" method="POST" class="mt">

									<label for="" class="text-uppercase text-sm">Usuário ou E-mail</label>
									<input type="text" maxlength="50" name="email" id="email" placeholder="Usuário ou E-mail" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Senha</label>
									<input type="password" name="password" id="password" placeholder="Password" class="form-control mb">

									<div class="checkbox checkbox-circle checkbox-info">
										<input id="checkbox7" type="checkbox" checked>
										<label for="checkbox7">
											Mantenha me conectado!
										</label>
									</div>

									<button class="btn btn-primary btn-block" type="submit">LOGIN</button>

								</form>
							</div>
						</div>
						<div class="text-center text-light">
							<a href="#" class="text-light">Esqueceu a senha?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require 'scripts_js.php'; ?>

</body>

</html>