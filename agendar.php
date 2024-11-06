<?php

// Configurações de conexão com o banco de dados
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'agendamentos';

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);

// Checar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$servico = $_POST['servico'];
$data_ = $_POST['data_'];
$hora = $_POST['hora'];

// Inserir no banco de dados
$sql = "INSERT INTO usuarios (nome, email, servico, data_, hora) VALUES ('$nome', '$email', '$servico', '$data_', '$hora')";

if ($conn->query($sql) === TRUE) {
    echo "Agendamento realizado com sucesso!";
}else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
//     // Enviar e-mail
//     $to = 'yagojose015@gmail.com';  // Seu e-mail aqui
//     $subject = 'Novo Agendamento';
//     $message = "Você recebeu um novo agendamento:\n\n"
//              . "Nome: $nome\n"
//              . "E-mail: $email\n"
//              . "Serviço: $servico\n"
//              . "Data: $data_\n"
//              . "Hora: $hora\n";
    
//     // Para que o e-mail seja enviado corretamente, você pode precisar configurar o headers.
//     $headers = "From: $email\r\n"; // Endereço do remetente (pode ser alterado)
    
//     if (mail($to, $subject, $message, $headers)) {
//         echo "E-mail enviado com sucesso!";
//     } else {
//         echo "Falha ao enviar o e-mail.";
//     }

// 
?>
