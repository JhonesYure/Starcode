<?php
$servername = "auth-db891.hstgr";
$username = "u820043173_contato";
$password = "kU:=B^3A+";
$dbname = "u820043173_contato";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
echo "Conexão bem sucedida!";

?>
