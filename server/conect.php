<?php
     $servername = "149.100.155.1";
     $username = "u820043173_contato";
     $password = "Yure1995+";
     $dbname = "u820043173_contato";
 
     $conn = mysqli_connect($servername, $username, $password, $dbname);
 
     if (!$conn) {
         die("Conexão falhou: " . mysqli_connect_error());
     }
     echo "Sua mensagem foi recebida!";

?>
