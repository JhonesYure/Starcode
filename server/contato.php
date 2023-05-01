<?php
    include_once("conect.php");
   
   
    
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $assunto=$_POST['assunto'];
    $mensagem=$_POST['mensagem'];

    $sql = "INSERT INTO contatos (nome, telefone, email, assunto, mensagem) VALUES ('$nome','$telefone', '$email','$assunto', '$mensagem')";


    /* $response = array('success' => true, 'message' => 'Formulário enviado com sucesso!');
    echo json_encode($response); */
    if ($conn->query($sql) === TRUE) {
        echo "Mensagem enviada com sucesso!";
        
      } else {
        echo "Erro ao enviar mensagem: " . $conn->error;
      }
      
      $conn->close();
?>