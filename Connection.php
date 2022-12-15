<?php

class Connection
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:dbname=mousdik_piano;host=127.0.0.1', 'root', 'root');
    }

    public function insert(User $user): bool
    {
        $query = 'INSERT INTO user (mail, first_name, last_name, password, date_creation_acc)
                    VALUES (:mail, :first_name, :last_name, :password, NOW())';

        $a = $this->login($user->mail, $user->password);

        if ($a) {
            echo 'Un Utilisateur avec ce mail existe déja ';
            return false;
        } else {
            $statement = $this->pdo->prepare($query);

            return $statement->execute([
                'mail' => $user->mail,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'password' => md5($user->password . 'FSRTGHBVCDSEZRFG'),
            ]);
        }

    }

    public function login($mail, $pass):bool
    {
        $query = "SELECT * FROM user WHERE mail='$mail' and password='".md5($pass . 'FSRTGHBVCDSEZRFG')."'";

        $statement = $this->pdo->prepare($query);

        $statement->execute();

        $user = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($statement->rowCount() === 1){
            return true;
        }
        else{
            return false;
        }

    }

}