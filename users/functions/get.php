<?php


if (isset($_GET['id'])) {

    //get id
    $id = $_GET['id'];
    //query
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = $conn->query($sql);

    //data recebe o resultado
    $data = $result->fetch_assoc();
    if($data === null){
        $status = "Dados não encontrados!";
        $data = $status;
    } 
} else {
    $data = array();
    //query
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    //insere dados na array
    while ($d = $result->fetch_assoc()) {
        $data[] = $d;
    }
    //retorna dados em um json
}


exit(json_encode($data));
