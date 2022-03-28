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

// $sql = " CREATE TABLE persona(
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     nome VARCHAR(30) NOT NULL,
//     cognome VARCHAR(45) NOT NULL,
//     email VARCHAR(70) NOT NULL UNIQUE
// )";

// if($connessione->query($sql)=== true){
//     echo "Tabella creata con successo \n";
// }else{
//     echo " errore nella creazione " . $connessione->error ."\n";
// }

$sql = "INSERT INTO persona(nome,cognome,email) VALUES

('Alex', 'blue' , 'Alex@gmaicd.com')

";

if ($connessione->query($sql) === true) {
    $ultimo_elemento= $connessione->insert_id;
    echo "L'ultima persona inserita è" . $ultimo_elemento ."\n";
    echo "persona inserita con successo";
} else {

    echo " pwrsona non inserita" . $connessione->error . "\n";
}



$sql = "INSERT INTO persona(nome , cognome , email ) VALUES (?,?,?)";

if ($statement = $connessione->prepare($sql)) {
    $statement->bind_param("sss", $nome, $cognome, $email);

    $nome = "Leonardo";
    $cognome = "Giallo";
    $email = "leogiallo@kbdmfskv.com";
    $statement->execute();

    echo "Record inserito";
} else {
    echo " non è possiile eseguire la quert $sql"  . $connessioni->error . "\n";
}


$sql = "SELECT * FROM persona";
if ($result = $connessione->query($sql)) {
    if ($result->num_rows > 0) {
        echo ' <table>
        <tr>
        <th>id</th>
        <th>nome</th>
        <th>cognome</th>
        <th>email</th>
        </tr>';
       
        while ($row = $result->fetch_array()) {
            echo '<tr>
               <td>' . $row['id'] . '</td>
               <td>' . $row['nome'] . '</td>
               <td>' . $row['cognome'] . '</td>
               <td>' . $row['email'] . '</td>
                </tr>';
        }
        echo  '</table>';
    } else {
        echo "Non ci sono righe ";
    }
} else {
    echo "errore, impossibile eseguire la query $sql " . $connessioni->error . "\n";
}


$connessione->close();
