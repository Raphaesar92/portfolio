<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$phone = addslashes($_POST['phone']);
$message = addslashes($_POST['message']);

$para = "rafa.casarini@portfoliocasarini.com.br";
$assunto =  "Coleta de dados - Clientes";

$corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Celular: " . $phone . "\n" . "Mensagem: " . $message;

$cabeca = "From: rafa.casarini@portfoliocasarini.com.br" . "\n" . "Reply-to: " . $email . "\n" . "X-Mailer:PHP/" . phpversion();

// Envia o e-mail e verifica se foi enviado com sucesso
if (mail($para, $assunto, $corpo, $cabeca)) {
    $mensagem = "E-mail enviado com sucesso!";
} else {
    $mensagem = "Houve um erro ao enviar o e-mail";
}

// Exibe a mensagem e redireciona para a página index.php após 5 segundos
echo "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Redirecionamento</title>
    <script>
        // Redireciona automaticamente para index.php após 5 segundos
        setTimeout(function(){
            window.location.href = 'index.php';
        }, 5000);
    </script>
</head>
<body>
    <div style='text-align: center; margin-top: 50px;'>
        <h2>{$mensagem}</h2>
        <p>Você será redirecionado para a página inicial em 5 segundos...</p>
    </div>
</body>
</html>
";
?>