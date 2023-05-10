<?php
    include_once("conect.php");
   
    $data= date("Y-m-d");
    
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $localidade=$_POST['localidade'];
    $assunto=$_POST['assunto'];
    $mensagem=$_POST['mensagem'];

    $sql = "INSERT INTO contatos (nome, telefone, email, localidade, assunto, mensagem, data) VALUES ('$nome','$telefone', '$email','$localidade', $assunto', '$mensagem', '$data')";

          //EMAIL 
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $telefone=$_POST["telefone"];
            $email = $_POST["email"];
            $assunto=$_POST["assunto"];
            $mensagem = $_POST["mensagem"];
        
            // Configurações do e-mail
            $destinatario = "contato@starcodedigital.com.br";
            $title = "Mensagem do formulario de contato";
        
            // Corpo do e-mail
            $mensagem_email = "Nome: " . $nome . "\n";
            $mensagem_email .= "E-mail: " . $email . "\n";
            $mensagem_email .= "Mensagem: " . $mensagem . "\n";
            

            // Cabeçalho do e-mail
            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
            $headers .= "From: " . $email . "\r\n";

        
            // Envia o e-mail
            if (mail($destinatario, $title, $mensagem_email, $headers)) {
                echo "";
            } else {
                echo "";
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