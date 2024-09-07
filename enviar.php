<?php
// Valida e sanitiza os dados do formulário
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Verifica se todos os campos foram preenchidos corretamente
if (!$nome || !$email || !$message) {
    echo "Por favor, preencha todos os campos obrigatórios.";
    exit;
}

// Configurações do e-mail
$para = "rafa.casarini@portfoliocasarini.com.br";
$assunto = "Coleta de dados - Clientes";

// Corpo do e-mail
$corpo = "Nome: " . $nome . "\n" .
         "E-mail: " . $email . "\n" .
         "Celular: " . $phone . "\n" .
         "Mensagem: " . $message;

// Cabeçalho do e-mail
$cabeca = "From: rafa.casarini@portfoliocasarini.com.br" . "\r\n" .
          "Reply-To: " . $email . "\r\n" .
          "X-Mailer: PHP/" . phpversion();

// Envia o e-mail e verifica se foi enviado com sucesso
if (mail($para, $assunto, $corpo, $cabeca)) {
    $mensagem = "E-mail enviado com sucesso!";
} else {
    $mensagem = "Houve um erro ao enviar o e-mail.";
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
        // Redireciona automaticamente para index.php após 1 segundos
        setTimeout(function(){
            window.location.href = 'index.php';
        }, 1000);
    </script>
</head>
<body>
    <div style='text-align: center; margin-top: 50px;'>
        <h2>{$mensagem}</h2>
        <p>Você será redirecionado para a página inicial em 1 segundos...</p>
    </div>
</body>
</html>
";
?>