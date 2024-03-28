<?php

define("API", "https://letsprepare.in/delivery_management/api.php");

function request($payload)
{
    $ch = curl_init(API);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    echo $response;
    return json_decode($response, true)['data'];

}

function updateStatus($id, $status)
{
    return request([
        "action" => "update",
        "table" => "orders",
        "where" => [
            "id" => $id
        ],
        "data" => [
            "is_active" => $status == 'pause' ? 0 : 1
        ]
    ]);
}

function getCustomer($phone)
{
    return request([
        "action" => "select",
        "table" => "customers_view",
        "where" => [
            "phone" => $phone
        ]
    ])[0];
}

function getOrders($id)
{
    return request([
        "action" => "select",
        "table" => "deliveries_view",
        "where" => [
            "client_id" => $id
        ]
    ]);
}
function getTransactions($id)
{
    return request([
        "action" => "select",
        "table" => "transactions",
        "where" => [
            "client_id" => $id
        ]
    ]);
}



?>