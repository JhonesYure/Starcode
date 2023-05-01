<?php
    /* include("conect.php"); */
    $servername = "149.100.155.1";
    $username = "u820043173_contato";
    $password = "Yure1995+";
    $dbname = "u820043173_contato";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
    echo "Conexão bem sucedida!";
   
    
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $assunto=$_POST['assunto'];
    $mensagem=$_POST['mensagem'];

    $sql= "INSERT INTO contato (nome, telefone, email, assunto, mensagem) VALUES ('$nome', '$telefone', '$email','$assunto','$mensagem')";

    if(mysqli_query($conexao, $sql))
    {
        echo "Enviado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>