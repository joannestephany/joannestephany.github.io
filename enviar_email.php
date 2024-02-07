<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $to = "contato.joannestephany@gmail.com";
    $subject = "Nova mensagem de contato de $name";
    $body = "Nome: $name\nEmail: $address\nMensagem:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Houve um erro ao enviar a mensagem.";
    }
}
?>
