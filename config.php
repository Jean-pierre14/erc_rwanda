<?php

class Connect extends PDO{
    public function __construct(){
        parent::__construct('mysql:host=localhost; dbname=erc_tb', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => PDO::ERRMODE_EXCEPTION));
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
}
}
?>