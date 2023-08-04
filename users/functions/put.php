<?php




$data = json_decode(file_get_contents("php://input"));
$sql = "UPDATE users
    SET
      nome = '$data->nome',
      sobrenome = '$data->sobrenome',
      email = '$data->email',
      nascimento = '$data->nascimento'
    WHERE
     id = '$data->id'";

if ($conn->query($sql)) {
    $status = array("status" => "Dados atualizados!");
}


exit(json_encode($status));
