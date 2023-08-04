<?php

require "../headers.php";
require 'conexao.php';

//pegar dados do banco de dados
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include "./functions/get.php";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "./functions/post.php";
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    include "./functions/delete.php";
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    include "./functions/put.php";
}
