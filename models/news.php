<?php

    class news {

        static function allMessage() {
            $db = db::dbInstance();
            $sql = "SELECT * FROM messages ORDER BY created_at DESC";
            $query = $db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }

        static function addMessage(string $title, string $text, string $img) {
            $db = db::dbInstance();
            $sql = "INSERT INTO messages (title, text, img_name) VALUES (:title, :text, :img_name)";
            $query = $db->prepare($sql);
            $query->execute(['title' => $title, 'text' => $text, 'img_name' => $img]);
            return true;
        }

        static function oneMessage(int $id) {
            $db = db::dbInstance();
            $sql = "SELECT * FROM messages WHERE id=:id";
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]);
            return $query->fetch();
        }

        static function deleteMessage(int $id) {
            $db = db::dbInstance();
            $sql = "DELETE FROM messages WHERE id=:id";
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]);
            return true;
        }

        static function editMessage(string $title, string $text, string $img, int $id) {
            $db = db::dbInstance();
            $sql = "UPDATE messages SET title=:title, text=:text, img_name=:img WHERE id=:id";
            $query = $db->prepare($sql);
            $query->execute(['title' => $title, 'text' => $text, 'img' => $img, 'id' => $id]);
            return true;
        }

    }