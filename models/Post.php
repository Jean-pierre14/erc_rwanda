<?php

    class Post{
        // DB stuff
        private $con;
        private $table = 'news';

        // Post Properties
        private $id;
        private $unique_id;
        private $title;
        private $subtitle;
        private $message;
        private $img;
        private $created_id;

        // Constructor with DB
        public function __construct($db)
        {
            $this->con = $db;
        }
        // Get Posts
        public function read(){
            $query = 'SELECT * FROM '.$this->table.'';

            // Prepare statement
            $stmt = $this->con->prepare($query);
            // Excute query
            $stmt->execute();

            return $stmt;
        }

    }