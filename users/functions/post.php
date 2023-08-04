<?php

//recebe dados enviados pelo fomulário

$data = json_decode(file_get_contents("php://input"));

//criptografar senha

$senha_criptografada = password_hash($data->senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO 
users(nome, sobrenome, email, nascimento, sexo, senha) 
VALUES(
    '$data->nome',
    '$data->sobrenome',
    '$data->email',
    '$data->nascimento',
    '$data->sexo',
    '$senha_criptografada'
    )";

if ($conn->query($sql)) {
    $status = array("status" => "Usuário cadastrado!");
}
exit(json_encode($status));
