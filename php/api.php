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
    $response = json_decode($response, true);
    if ($response['res'] != 'success') {
        throw new Exception($response['data'], 1);
    }
    return $response['data'];

}

function updateStatus($id, $status, $client_id)
{
    return request([
        "action" => "update",
        "table" => "orders",
        "where" => [
            "id" => $id,
            "client_id" => $client_id
        ],
        "data" => [
            "is_active" => $status == 'pause' ? 0 : 1
        ]
    ]);
}

function getCustomer($phone)
{
    $users = request([
        "action" => "select",
        "table" => "customers_view",
        "where" => [
            "phone" => $phone
        ]
        ]);
        if(count($users) == 0){
            throw new Exception("User not found", 1);
        }
        return $users[0];
}

function getDeliveries($id)
{
    return request([
        "action" => "select",
        "table" => "deliveries_view",
        "where" => [
            "client_id" => $id
        ]
    ]);
}
function getOrders($id)
{
    return request([
        "action" => "select",
        "table" => "orders",
        "cols" => "*, (SELECT COUNT(*) FROM deliveries WHERE order_id = orders.id AND status = 'delivered') as `total_deliveries`",
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
        "cols" => "*, DATE_FORMAT(timestamp,'%d %b') AS date ",
        "where" => [
            "client_id" => $id
        ],
        "orderBy" => "timestamp DESC"
    ]);
}
function updateAccountStatus($id, $status)
{
    return request([
        "action" => "update",
        "table" => "clients",
        "where" => [
            "id" => $id
        ],
        "data" => [
            "status" => $status
        ]
    ]);
}


function updateDeliveryStatus($id, $status)
{
    if ($status == "cancelled") {

        return request([
            "action" => "insert",
            "table" => "deliveries",
            "data" => [
                "order_id" => $id,
                "status" => "cancelled"
            ]
        ]);
    } else {
        return request([
            "action" => "update",
            "table" => "deliveries",
            "where" => "order_id = $id AND timestamp > curdate()",
            "data" => [
                "status" => $status
            ]
        ]);
    }
}


?>