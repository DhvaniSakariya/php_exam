<?php

    header("Access-Control-Allow-Method: POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    $res = array();

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $name = @$_POST['name'];
        $age = @$_POST['age'];
        $contact = @$_POST['contact'];

        $result = $config->insert($name,$age,$contact);

        if($result) {
            $res = ["msg" => "Record inserted successfully !!"];
            http_response_code(201);
            
        }
        else {
            $res = ["msg" => "Record insertion failled !!"];
        }

        echo json_encode($res);
    }
    else {
        
        $res = [
            'msg' => "Only POST method is allowed !!",
        ];
        
        http_response_code(403);

        echo json_encode($res);
    }

?>