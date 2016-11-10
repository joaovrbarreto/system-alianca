<?php

// DEFINE IDENTIDADE DO SITE
define('SITENAME', 'Service Desk - Aliança de Misericórdia');
define('SITEDESC', 'Tudo que você precisa para ser bem atendido!');

// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ws');
 
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
// inclui o arquivo de funçõees
require_once 'functions.php';
