<?php

if (isset($_GET['id'])) {

    $id = $conn->real_escape_string($_GET['id']);
    $data = json_decode(file_get_contents("php://input"));
    $sql = "UPDATE users
    SET
      nome = '$data->nome',
      sobrenome = '$data->sobrenome',
      email = '$data->email',
      nascimento = '$data->nascimento'
    WHERE
     id = '$id'";

    if ($conn->query($sql)) {
        $status = array("status" => "Dados atualizados!");
    }
}

exit(json_encode($status));
