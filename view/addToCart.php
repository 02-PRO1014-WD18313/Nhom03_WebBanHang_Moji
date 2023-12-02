<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $img = $_POST['img'];
    $idsp = $_POST['idsp'];
    $giacu = $_POST['giacu'];
    $giamoi= $_POST['giamoi'];

    $index = false;
    if (!empty($_SESSION['cart'])) {
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));
    }
    
    // array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứa giá trị của cột id
    if ($index !== false) {
        $_SESSION['cart'][$index]['quantity'] += 1;
    } else {
        $product = [
            'id' => $productId,
            'idsp' => $idsp,
            'name' => $productName,
            'img' => $img,
            'giacu' => $giacu,
            'giamoi' => $giamoi,
            'quantity' => 1
        ];
        $_SESSION['cart'][] = $product;
    }
    echo count($_SESSION['cart']);
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>