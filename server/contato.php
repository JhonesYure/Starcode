<?php
    include_once("conect.php");
   
   
    
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $assunto=$_POST['assunto'];
    $mensagem=$_POST['mensagem'];

    $sql = "INSERT INTO contatos (nome, telefone, email, assunto, mensagem) VALUES ('$nome','$telefone', '$email','$assunto', '$mensagem')";

          //EMAIL 
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $mensagem = $_POST["assunto"];
        
            // Configurações do e-mail
            $destinatario = "atendimento@starcodedigital.com.br";
            $assunto = "Mensagem do formulário de contato";
        
            // Corpo do e-mail
            $mensagem_email = "Nome: " . $nome . "\n";
            $mensagem_email .= "E-mail: " . $email . "\n";
            $mensagem_email .= "Mensagem: \n" . $mensagem . "\n";
        
            // Envia o e-mail
            if (mail($destinatario, $assunto, $mensagem_email)) {
                echo "E-mail enviado com sucesso!";
            } else {
                echo "Ocorreu um erro ao enviar o e-mail.";
            }
          }
    /* $response = array('success' => true, 'message' => 'Formulário enviado com sucesso!');
    echo json_encode($response); */
    if ($conn->query($sql) === TRUE) {
        echo "A StarCode entrará em contato.";
        
      } else {
        echo "Erro ao enviar mensagem: " . $conn->error;
      }
      
      $conn->close();

     
?>