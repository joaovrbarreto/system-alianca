<?php require 'Config.php' ?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			
			<link rel="stylesheet" href="style.css"/>
		<link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
		<title> Aliança de Misericórdia - Suporte Técnico</title>
	</head>

	<body>

	<div class="form-group">
		<header class="cabecalho">
			<h1> Associação Aliança de Misericórdia</h1>
			<p> Departamento de Tecnologia da Informação</p>
			<p> Solicitação de Manutenção</p>
		</header>
	</div>

	<div class="form-group">
	<div class="col-md-12">
		<header>
			<form action="Insert.php" method="POST" >
				<label>Nome do Requisitante</label> <input type="text" name="requester_name" id="requester_name" placeholder="">
				<label> Data </label> <input type="date" name="">
				<label>Setor Requisitante</label> <input type="text" name="" id="requester_sector" placeholder="">
				<label>Telefone</label> <input type="text" name="" id="requester_phone" placeholder=""><br>
			<br>
			<label> Serviço a executar</label>
			<textarea id="service_running" maxlength="500"></textarea>
		</header><br><br>
	</div>
	<div>

		<div class="col-md-12">
		<header>
			<h1> Para Uso da Equipe Técnica</h1>

			<label> Diagnóstico </label>
			<textarea id="diagnostic"></textarea> <br>

			<label> Serviço Executador por : </label> <input type="text" name="" id="run_service" placeholder="">
			<label> Data </label> <input type="date" name="">
			<label> Serviço Recebido por: </label> <input type="" name="" id="run_received" placeholder="">
			<label> Data </label> <input type="date" name="">
			<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
			
		</header>

		</div>

			
	</body>
</html>