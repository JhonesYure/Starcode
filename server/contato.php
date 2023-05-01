<?php
    include_once("conect.php");
   
   
    
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $assunto=$_POST['assunto'];
    $mensagem=$_POST['mensagem'];

   $result = mysqli_query($conexao, "INSERT INTO contato(idcontato, nome, telefone, email, assunto, mensagem) 
    VALUES ('$','$nome','$telefone','$email','$assunto','$mensagem')");

    if(mysqli_query($conexao, $sql))
    {
        echo "Enviado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>