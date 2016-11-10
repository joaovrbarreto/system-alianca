<?php
session_start();
if((!isset ($_SESSION['user_id']) == true) and (!isset ($_SESSION['user_name']) == true))
	{
		header('location:index.php');
	}
require_once 'config.php';
require_once 'header.php';
?>

<body>
	<div class="brand clearfix">
		<a href="#" class="logo"><img src="img/logo@2x.png" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Configurações</a></li>
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> <?php echo $_SESSION['user_name']; ?> <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="#">Minha Conta</a></li>
					<li><a href="#">Editar Conta</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label"></li>
				<li class="open"><a href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="service.php"><i class="fa fa-edit"></i>Cadastrar Serviço</a>
				</li>
				<li><a href="envia-email.php"><i class="fa fa-check"></i>Enviar E-mail</a>
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

						<h2 class="page-title">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">4</div>
													<div class="stat-panel-title text-uppercase">Serviços</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Ver Todos <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">8</div>
													<div class="stat-panel-title text-uppercase">Tickets de Suporte</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Ver Todos &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">58</div>
													<div class="stat-panel-title text-uppercase">Encomendas</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Ver Todos &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">1</div>
													<div class="stat-panel-title text-uppercase">Serviço Pendente</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Ver Todos &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>						
						<div class="row">
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<?php require 'scripts_js.php'; ?>
	

</body>

</html>