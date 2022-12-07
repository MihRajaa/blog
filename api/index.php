<?php

header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$servername = "localhost";
$username = "root";
$password = "123456789";


try {
    // $pdo = new PDO("mysql:host=$servername;dbname=blogdb", $username, $password);
    $db = mysqli_connect($servername, $username, $password, 'blogdb');
    echo "Connected successfully \n";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $pdo->prepare("SELECT * FROM phpbb_blogdbposts");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

// print(gettype($users));

$res = json_decode(json_encode((object)$users, JSON_FORCE_OBJECT));
// print_r($res);

foreach ($res as $user) {
    # code...

    print_r($user->post_id);
}
// $url = '';
