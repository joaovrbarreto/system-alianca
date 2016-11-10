<?php
require_once 'config.php';
require_once 'header.php';
?>

<body>
	<div class="brand clearfix">
		<a href="index.html" class="logo"><img src="img/logo@2x.png" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Configurações</a></li>
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> João Victor <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="#">Minha Conta</a></li>
					<li><a href="#">Editar Conta</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Main</li>
				<li class="open"><a href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="service.php"><i class="fa fa-edit"></i>Cadastrar Serviço</a>
				</li>
				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li><a href="#">Help</a></li>
					<li><a href="#">Settings</a></li>
					<li class="ts-account">
						<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">Minha Conta</a></li>
							<li><a href="#">Editar Conta</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">
			<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Entre em contato conosco</div>
									<div class="panel-body">
										<form  action="mail.php" method="POST" class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">Seu Nome  </label>
												<div class="col-sm-10">
													<input type="text" name="name" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">E-mail</label>
												<div class="col-sm-10">
													<input type="text" name="email" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Assunto</label>
												<div class="col-sm-4">
													<input type="text" name="assunto" class="form-control">
												</div>

											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Sua Mensagem</label>
												<div class="col-sm-10">
												<textarea class="form-control" name="msg" rows="6"></textarea>
												</div>
											</div>
											
											<div class="row">
										
											<div class="panel-body">
													
											<div id="errorBlock43" class="help-block"></div>
												<div class="hr-dashed"></div>
											<div class="form-group">
												<div class="col-sm-12 col-sm-offset-5">
													<button class="btn btn-danger" type="reset">Limpar</button>
													<button class="btn btn-success" type="submit">Enviar</button>
												</div>
											</div>
										</form>
