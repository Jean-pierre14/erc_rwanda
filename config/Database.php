<?php
    class Database{
        // DB params
        private $host = "localhost";
        private $db_name = "erc_db";
        private $username = "roor";
        private $password = "";
        private $con;

        // DB connect
        public function connect(){
            $this->con = null;
            
            try{
                $this->con = new PDO('mysql:'. $this->host. ';dbname=' .$this->db_name, $this->username, $this->password);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                print "Connection Error: ". $e->getMessage();
            }
            return $this->con;
        }
    }
