<?php

// Aqui conectamos com o DB.
$mysqli = new mysqli('localhost', 'root', '', 'am_request');

// Executa uma consulta que pega cinco notícias
$sql = "SELECT 'id', 'titulo' FROM 'noticias' LIMIT 5";

$query = $mysqli->query($sql);
while ($dados = $query->mysqli_fetch_array()) {
	echo 'ID: ' . $dados['id'] . '';
	echo 'Título: ' . $dados['titulos'] . '';
}

echo 'Registros encontrados: ' . $query->num_rows;
