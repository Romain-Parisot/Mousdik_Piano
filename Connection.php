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
        $query = 'INSERT INTO user (mail, first_name, last_name, password)
                    VALUES (:mail, :first_name, :last_name, :password)';

        $a = $this->login($user->mail, $user->password);

        if ($a) {
            echo 'Un Utilisateur avec cet email existe déja ';
            return false;
        } else {
            $statement = $this->pdo->prepare($query);

            return $statement->execute([
                'email' => $user->mail,
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

}