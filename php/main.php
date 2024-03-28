<?php

session_start();
$res = ["res" => "success", "data" => null];
try {
    $input = json_decode(file_get_contents('php://input'), true);
    if($input['action'] == 'update_status'){
        include("api.php");
        $client_id = $_SESSION['user_id'];
        if(!$client_id) throw new Exception("Invalid Request");
        $res['data'] = updateStatus($input["orderId"], $input["status"], $client_id);
    }else{
        throw new Exception("Invalid Request");
    }
} catch (\Throwable $th) {

    $res = ["res" => "error", "data" => $th->getMessage()];
}
echo json_encode($res, JSON_NUMERIC_CHECK);




?>