<?php

$data = [
    "name" => $_POST['name'],
    "mail" => $_POST['email'],
    "message" => $_POST['message']
];

$connection = new PDO('mysql:host=localhost;dbname=hhm_db;', 'root', '');
$insert = 'INSERT INTO messages (name, mail, message) VALUES (:name, :mail, :message)';
$select = 'SELECT id, name, mail, message FROM messages';
$delete = 'DELETE FROM `messages` WHERE `id` = ?';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $params = [$id];
    $stmt = $connection->prepare($delete);
    $result = $stmt->execute($params);
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $statement = $connection->prepare($insert);
    $result = $statement->execute($data);
}

$stmt = $connection->query($select)->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($stmt);
