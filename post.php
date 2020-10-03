<?php 
    include('db.php');

    class Post{
        private $db;
        public function __construct($db) {
            $this->db = $db;
        }

        public function addPost($title, $content, $create_at) {
            $sql = "INSERT INTO posts(title, content, create_at) VALUES ('$title', '$content', '$create_at')";
            $result = mysqli_query($this->db, $sql);
            // if ($result) {
            //     echo "post added successfully";
            // }
            return $result;
        }

        public function getPost() {
            $sql = "SELECT * FROM posts";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }
    }
?>