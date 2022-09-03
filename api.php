<?php

require_once __DIR__ . './config.php';

class API{
    function Select(){
        $db = new Connect;
        $users = array();
        $data = $db->prepare('SELECT * FROM admins');
        $data->execute();
        while($row = $data->fetch(PDO::FETCH_ASSOC)){
            $users[$row['id']] = array(
                'id' => $row['id'],
                'name' => $row['name']
            );
        }
        return json_encode($users);
    }
}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();


?>