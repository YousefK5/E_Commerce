<?php

// DB credentials.
//constant variable -->1.defined using define function , 2. can be use without $, 3.cannot be changed ,4. accessed regardless of scope, 5.only be strings and numbers

<<<<<<< HEAD
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', 'root');
// define('DB_NAME', 'e-commerce');
=======
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'e-commerce');
>>>>>>> b391bb76fb0820e34d465965afbe72f318644a78
try {
    $connect = new PDO(
        "mysql:host=localhost;dbname=e-commerce", 'root','root');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // ECHO "CONNECT SUCCESSFULLY" ;
} catch (PDOException $e) {
    echo 'connection falid ' . $e->getMessage();
}
