<?php

// Recupera os dados enviados pelo formulário
$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

// Variáveis locais
$Erro = true;
$Nome = $GetPost['name'];
$Email = $GetPost['email'];
$Assunto = $GetPost['assunto'];
$Msg = $GetPost['msg'];

// Incluir a classe PHPMailer
include_once 'PHPMailer/class.smtp.php';
include_once 'PHPMailer/class.phpmailer.php';

// Enviando o e-mail utilizando a classe PHPMailer

$Mailer = new PHPMailer;
$Mailer->CharSet = "utf8";
$Mailer->SMTPDebug = 0;
$Mailer->IsSMTP();
$Mailer->Host = "br214.hostgator.com.br";
$Mailer->SMTPAuth = true;
$Mailer->Username = "contato@joaovictorbarreto.com";
$Mailer->Password = "04532910510";
$Mailer->SMTPSecure = "tls";
$Mailer->Port = 587;
$Mailer->FromName = "Novo contato - {$Nome}";
$Mailer->From = "contato@joaovictorbarreto.com";
$Mailer->AddAddress("$Email");
$Mailer->IsHTML(true);
$Mailer->Subject = "{$Assunto}";
$Mailer->Body = "{$Msg}";


// Verificação
if($Mailer->send()){
	echo  'Email enviado com Sucesso!';
}



