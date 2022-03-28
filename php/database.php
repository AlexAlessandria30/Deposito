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

$sql = " CREATE TABLE persona(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(45) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";

if($connessione->query($sql)=== true){
    echo "Tabella creata con successo \n";
}else{
    echo " errore nella creazione " . $connessione->error ."\n";
}

$connessione->close();
