<?php

// DB credentials.
//constant variable -->1.defined using define function , 2. can be use without $, 3.cannot be changed ,4. accessed regardless of scope, 5.only be strings and numbers

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'e-commerce');
try {
    $connect = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
        DB_USER,
        DB_PASS
    );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // ECHO "CONNECT SUCCESSFULLY" ;
} catch (PDOException $e) {
    echo 'connection falid ' . $e->getMessage();
}

function getAllUsers()
{
    $users = $connect->query('SELECT * FROM users');

    $users = $users->fetchAll();

    return $users;
}
