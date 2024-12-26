<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $_SESSION['cart'][] = $id;

    header("Location: index.php?add_cart=1");
}

// Fungsi unset array
if (isset($_GET['remove_id'])) {
    $remove_id = ($_GET['remove_id']);
    if (($key = array_search($remove_id, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]); // Hapus dari cart
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    header("Location: trx.php?remove_cart=1");
    exit();
}

?>