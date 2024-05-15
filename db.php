<?php
// include_once __DIR__.'/utente.php'; 
// $servername = "localhost";
// $username = "root"; // Cambia questo se il tuo utente MySQL non è 'root'
// $password = ""; // Cambia questo con la password del tuo utente MySQL
// $dbname = "s5-l5-utenti";

// try {
//     // Creare connessione PDO
//     $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
//     $options = [
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_EMULATE_PREPARES => false,
//     ];
//     $pdo = new PDO($dsn, $username, $password, $options);
// } catch (PDOException $e) {
//     die("Connessione fallita: " . $e->getMessage());
// }
include_once __DIR__.'/init.php';
include_once __DIR__.'/classi/utente.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['utente']) && isset($_POST['password'])) {
     
        $utente = $_POST['utente'];
        $password = $_POST['password'];

      $utente1=new Utente($utente,$password,$pdo);
     
    } else {
        echo "Nome utente o password non specificati.";
    }
}

