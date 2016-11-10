<?php
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
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt="">  <i class="fa fa-angle-down hidden-side"></i></a>
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
									<div class="panel-heading">Solicitação de Manutenção</div>
									<div class="panel-body">
										<form method="get" class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">Nome do Requisitante</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Setor Requisitante</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Telefone</label>
												<div class="col-sm-4">
													<input type="" class="form-control">
												</div>
													
												<label class="col-sm-2 control-label">Data</label>
												<div class="col-sm-2">
													<input type="text" id="date" class="form-control data data_02" data-date-language="pt-BR" placeholder="00/00/0000">
												</div>

											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Serviço a Executar</label>
												<div class="col-sm-10">
													<input type="text" class="form-control"><span class="help-block m-b-none">Informe aqui a descrição do serviço a ser realizado.</span> </div>
											</div>
											
											<div class="row">
											<div class="panel panel-default">
												<div class="panel-heading">Para Uso da Equipe Técnica</div>
											<div class="panel-body">

											<div class="form-group">
												<label class="col-sm-2 control-label">Diagnóstico</label>
												<div class="col-sm-10">
													<input type="text" class="form-control"><span class="help-block m-b-none">Informe aqui o diagnóstico identificado.</span> </div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Serviço Executador por:</label>
												<div class="col-sm-5">
													<input type="text" class="form-control">
												</div>

												<label class="col-sm-2 control-label">Data</label>
												<div class="col-sm-2">
													<input type="text" id="date" class="form-control data data_02" data-date-language="pt-BR" placeholder="00/00/0000">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Serviço Recebido por:</label>
												<div class="col-sm-5">
													<input type="text" class="form-control">
												</div>

												<label class="col-sm-2 control-label">Data</label>
												<div class="col-sm-2">
													<input type="text" id="date" class="form-control data data_02" data-date-language="pt-BR" placeholder="00/00/0000">
												</div>
											</div>											

											<div id="errorBlock43" class="help-block"></div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<div class="col-sm-12 col-sm-offset-5">
													<button class="btn btn-danger" type="submit">Limpar</button>
													<button class="btn btn-success" type="submit">Enviar</button>
												</div>
											</div>
										</form>

								<?php require 'scripts_js.php'; ?>