<?php
    include_once("conect.php");
   
   
    
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $assunto=$_POST['assunto'];
    $mensagem=$_POST['mensagem'];

    $sql = "INSERT INTO contato (nome, telefone, email, assunto, mensagem) VALUES ('$nome','$telefone', '$email','$assunto', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "Mensagem enviada com sucesso";
      } else {
        echo "Erro ao enviar mensagem: " . $conn->error;
      }
      
      $conn->close();
?>