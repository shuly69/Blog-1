<?php
  
    class newsController {
        static function fileExist(string $file){
            if(file_exists($file)){
                require_once($file);
            }
        }

        public function homeAction() {
           $home = 'views/homeViews.php';
           self::fileExist($home);
        }

        public function blogAction() {
            $messages = news::allMessage();
            require_once('views/blogViews.php');
        }

        public function oneAction(int $id) {
            $message = news::oneMessage($id);
            require_once('views/oneViews.php');
        }

        public function deleteAction(int $id) {
            news::deleteMessage($id);
            header('Location: ' . BASE_URL . 'blog/');
            return true;
        }
        
       

        

        public function editAction(int $id) {
            $message = news::oneMessage($id);
            
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $title = htmlspecialchars(trim($_POST['title']));
                $text = htmlspecialchars(trim($_POST['text']));
                $img = $message['img_name'];
                if($_FILES['file']['name'] !== ''){
                    $img = $_FILES['file']['name'];
                    copy($_FILES['file']['tmp_name'], 'assets/img/' . $_FILES['file']['name']);  
                }
                    
                
                if($title !== '' && $text !== '' && $img !== '') {
                    news::editMessage($title, $text, $img, $id);
                    header('Location: ' . BASE_URL . 'blog/');
                }else{
                    echo 'Данные не корректны';
                }
            }
            require_once('views/editViews.php');

        }

        public function addAction() {
            $add = 'views/addViews.php';
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $title = htmlspecialchars(trim($_POST['title']));
                $text = htmlspecialchars(trim($_POST['text']));
                if(isset($_FILES['file'])){
                    $img = $_FILES['file']['name'];
                    copy($_FILES['file']['tmp_name'], 'assets/img/' . $_FILES['file']['name']);
                }
                if($title !== '' && $text !== '' && $img !== ''){
                    news::addMessage($title, $text, $img);
                    header('Location: ' . BASE_URL . 'blog');
                }else{
                    echo'Заполните все поля!';
                }
            }
            self::fileExist($add);
        }
    }