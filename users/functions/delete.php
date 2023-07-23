<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    //query 
    $sql = "DELETE FROM users WHERE id = '$id'";

    if($conn->query($sql)){
        $status = array("status" => "Dados removidos");
    }
}

exit(json_encode($status));