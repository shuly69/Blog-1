<?php

class users {
    static function addUser(string $login, string $password) {
        $db = db::dbInstance();
        $sql = "INSERT INTO users (login, password) VALUES (:login, :password)";
         $query = $db->prepare($sql);
         $query->execute(['login' => $login, 'password' => $password]);
         return true;
        }

        static function getUser(string $login) {
            $db = db::dbInstance();
            $sql = "SELECT * FROM users WHERE login=:login";
            $query = $db->prepare($sql);
            $query->execute(['login' => $login]);
            return $query->fetch();
        }


}