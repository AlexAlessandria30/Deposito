<?php


$host = "127.0.0.1";
$user = "root";
$password = "rootroot";
$database = "databaseToPhp";

$connessione = new mysqli($host, $user, $password, $database);

if ($connessione == false) {
    die("Errore di connessione "  . $connessione->connect_error);
}

echo "Connessione avvenuta \n";


$sql = "UPDATE  persona set email='Alexalessandria@gmail.it' where id = '1' ";
if ($connessione->query($sql)=== true) {
    echo"modifica effettuata \n";
}else{
    echo "modifica non effettuata $sql \n";
}


$sql ="DELETE from persona where id ='11'";
if ($connessione->query($sql)=== true) {
    echo"eliminazzione effettuata \n";
}else{
    echo "eliminazione non effettuata $sql \n";
}

$connessione->close();
