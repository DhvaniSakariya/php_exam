<?php

    header("Access-Control-Allow-Method: POST");
    header("Content-Type: application/json");

    include('config/config.php');

    $config = new config();

    $res = array();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $POST['email'];
        $password = password_hash($POST['password'],PASSWORD_DEFAULT);

        $result= $config->register_user_admin($email,$password);

        if($result){
            $res['msg'] = "Successfully user register...";
            http_response_code(201);

        }else{
            $res['msg']= "User insert failed...";
        }
    }else{
            $res['msg']= "Only POST method is allowed...";
        }
        echo json_encode($res);
?>