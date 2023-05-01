<?php
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
require_once './Connection.php';
$connection = new Connection();
echo '<pre>';
var_dump($_POST);
echo '</pre>';
$id = $_POST['id'] ?? '';
if ($id) {
    # code...
    $connection->updateNote($id, $_POST);
} else {
    # code...
    $connection->addNote($_POST);
}

header('Location:index.php');
