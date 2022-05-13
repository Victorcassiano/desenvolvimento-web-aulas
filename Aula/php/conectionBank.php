<?php 

$server = "localhost";
$db_name = "db_aulaweb";
$username = "root";
$password = "usbw";
$port = "3307";


$conectionMysql = mysqli_connect($servidor, $username, $password, $db_name, $port);

try {
    $conectionPDO = new PDO("mysql:host=$server;dbname=$db_name;port=$port", $username, $password);   
    $conectionPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão feita!";

    $sql_insert = "insert into aluno (name, cpf, matricula) VALUES ('Victor Cassiano', '70004166450', '201807018')";

    $conectionPDO -> query($sql_insert);

}catch(PDOException $error){
    echo "Conexão não feita!";
    echo "<br />";
    echo "Motivo: ", $error -> getMessage();
}

?>