<?php

$id = $_GET['id'];

$query = "DELETE FROM `items` WHERE `id`=$id";

$response = mysqli_query($conn, $query);

if(mysqli_affected_rows($conn) > 0){
    $output['success'] = true;
}else{
    $output['error'] = "Failed to update item with ID: $id";
}