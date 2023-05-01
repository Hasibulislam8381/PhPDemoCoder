<?php
require_once './Connection.php';
$connection = new Connection();
$connection->removeNote($_POST['id']);

header('Location:index.php');
