<?php

class usersController {
    public function loginAction() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $login = htmlspecialchars(trim($_POST['login']));
            $password = htmlspecialchars(trim($_POST['password']));
            if($login !== '' && $password !== ''){
                $user = users::getUser($login);
                if(password_verify($password, $user['password'])){
                    $_SESSION['user'] = $login;
                    header('Location: ' . BASE_URL . 'blog/');
                }else{
                    echo 'Пароли не совпадают';
                }
            }else{
                echo 'Заполните данные';
            }
        }
        require_once('views/LoginViews.php');
    }

    public function registrAction() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $login = htmlspecialchars(trim($_POST['login']));
            $password = $_POST['password'];
            $password_verify = $_POST['password_verify'];
            if($login !== '' && $password !== '' && $password === $password_verify){
                $passw_clear = htmlspecialchars(trim($_POST['password']));
                $pass = password_hash($passw_clear, PASSWORD_DEFAULT);
                users::addUser($login, $pass);
                header('Location: ' . BASE_URL . 'login/');
            }else{
                echo 'Введите заново данные';
            }
        }
        require_once('views/registrViews.php');
    }

    public function galleryAction() {
        require_once('views/galleryViews.php');
    }

    public function contactsAction() {
        require_once('views/contactsViews.php');
    }

    public function logoutAction() {
        unset($_SESSION['user']);
        header('Location: ' . BASE_URL);
    }
}