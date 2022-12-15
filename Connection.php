<?php

class Connection
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:dbname=mp;host=127.0.0.1', 'root', '');
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
            $_SESSION['name']=$user[0]["first_name"];
            $_SESSION['id']=$user[0]["id"];
            return true;
        }
        else{
            return false;
        }

    }

    public function insertReservation(Renovation $renovation): bool
    {
        $query = 'INSERT INTO `réservation_renovation` 
        (product_name, description, heure_de_reservation, en_boutique, user_id) 
        VALUES(:product_name, :description, :heure_de_reservation, :en_boutique, :user_id)';

        $stmt = $this->pdo->prepare($query);
        
        return $stmt->execute([
            'product_name' => $renovation->productName, 
            'description' => $renovation->description, 
            'heure_de_reservation' => $renovation->reservationDate,
            'en_boutique' => $renovation->inStore, 
            'user_id' => $renovation->userId
        ]);
    }
    public function insert_tel(Check $data_tel): bool
    {
        $query = 'UPDATE user SET (telephone) VALUES (:telephone) WHERE id = ""  ';

        $statement = $this->pdo->prepare($query);

        return $statement->execute([
                'tel' => $user->telephone
            ]);
    }

    public function insert_mail(Check $data_mail): bool
    {
        $query = 'UPDATE user SET (mail) VALUES (:mail) WHERE id = "" ';

        $statement = $this->pdo->prepare($query);

        return $statement->execute([
                'mail' => $user->mail
            ]);
    }

    public function insert_mdp(Check $data_mdp): bool
    {
        $query = 'UPDATE user SET (mdp) VALUES (:mdp) WHERE id = "" ';

        $statement = $this->pdo->prepare($query);

        return $statement->execute([
                'password' => md5($user->password . 'FSRTGHBVCDSEZRFG'),
            ]);
    }

    public function insert_adresse(Check $data_adresse): bool
    {
        $query = 'UPDATE user SET (adresse) VALUES (:adresse) WHERE id = "" ';

        $statement = $this->pdo->prepare($query);

        return $statement->execute([
                'adresse' => $user->adresse,
            ]);
    }

    public function insert_name(Check $fist_name, $last_name): bool
    {
        $query = 'UPDATE user SET (first_name, last_name) VALUES (:first_name, :last_name) WHERE id = "" ';

        $statement = $this->pdo->prepare($query);

        return $statement->execute([
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
            ]);
    }

}