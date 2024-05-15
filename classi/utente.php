<?php


class Utente{
    private $utente;
    private $password;
    function __construct($utente,$password,$pdo){
        $this->utente=$utente;
        $this->password=$password;
        


        $sql = "SELECT * FROM utenti WHERE utente = :utente";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['utente' => $utente]);
        $user = $stmt->fetch();
      
        
        if ($user) {
            if ($password=== $user['password']) {
                $_SESSION['utente'] = true;
                
                header("Location: admin.php");
                exit(); 
            } else {
                echo "Nome utente o password errati.";
            }
        } else {
            echo "Nome utente o password errati.";
            $_SESSION['utente'] = false;
        }
    }

}

