<?php

define("API", "https://letsprepare.in/delivery_management/site_api.php");

function request($action, $table, $key, $value){
    $url = API . "?action=$action&table=$table&key=$key&value=$value";
    $data = file_get_contents($url);
    return json_decode($data, true)['data'];

}

function getCustomer($phone){
    return request("select", "customers_view", "phone", $phone)[0];
}

function getOrders($id){
    return request("select", "deliveries_view", "client_id", $id);
}
function getTransactions($id){
    return request("select", "transactions", "client_id", $id);
}



?>