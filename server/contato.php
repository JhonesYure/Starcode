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
            $telefone=$_POST["telefone"];
            $email = $_POST["email"];
            $assunto=$_POST["assunto"];
            $mensagem = $_POST["mensagem"];
        
            // Configurações do e-mail
            $destinatario = "atendimento@starcodedigital.com.br";
            $title = "Mensagem do formulario de contato";
        
            // Corpo do e-mail
            $mensagem_email = "Nome: " . $nome . "\n";
            $mensagem_email = "Telefone: " . $telefone . "\n";
            $mensagem_email .= "E-mail: " . $email . "\n";
            $mensagem_email = "Assunto: " . $assunto . "\n";
            $mensagem_email .= "Mensagem: \n" . $mensagem . "\n";
        
            // Envia o e-mail
            if (mail($destinatario,$nome,$telefone,$email, $title, $mensagem_email)) {
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