
<?php
require_once 'connection.php';

$prodId = $_GET['ad'];

if (isset($_GET['q'])) {
    $qunatity = $_GET['q'];
} else {
    $qunatity = 1;
}

if (!isset($_SESSION['userid'])) {
    if (isset($_SESSION['cartVisitor'])) {
        $inCart = array_search($prodId, $_SESSION['cartVisitor']);
        if ($inCart) {
            $_SESSION['cartVisitor'][0];
        }
    }
    $_SESSION['cartVisitor'] = [$_GET['ad'], 1];
}

print_r($_SESSION);

// $cart = $connect->query('SELECT * FROM cart WHERE ');

if (isset($_GET['ad'])) {
    $curId = $_SESSION['userid'];
    $qunatity = 1;
    $insert = $connect->prepare(
        'INSERT INTO cart (quantity,product_id,user_id) VALUES (?,?,?)'
    );
    $insert->execute([$qunatity, $_GET['ad'], $_SESSION['userid']]);
    if ($_GET['from'] == 'shop') {
        header('location: ./shop.php');
    } else {
        header('location: ./index.php');
    }
}
?>

<?php if (isset($_GET['ad']) && isset($_GET['q'])) {
    $qunatity = $_GET['q'];
    $insert = $connect->prepare(
        'INSERT INTO cart (quantity,product_id,user_id) VALUES (?,?,?)'
    );
    $insert->execute([$qunatity, $_GET['ad'], $_SESSION['userid']]);
}

?>
