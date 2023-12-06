<?php
    include '../models/pdo.php';
    include '../models/binhluan.php';
    session_start();
    if(isset($_GET['idsp'])){
        $id_sp = $_GET['idsp'];
        echo $id_sp;
    }
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
        $user = "";
    }
    if(isset($_POST['sendCmt'])){
        // $name = $_POST['name'];
        $id_sp = $_POST['id_pro'];
        $noidung = $_POST['noidung'];
        $time = date("h:i:sa d/m/Y");
        $id_user = $_SESSION['user']['id'];
        insert_binhluan($id_sp, $noidung, $time, $id_user);
    }
    $bl = showbl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <form action="binhluan.php" method="post">
        <input type="hidden" name="id_pro" value="<?php echo $id_sp?>">
        <input type="text" name="noidung">
        <input type="submit" value="Gửi Bình Luận" name="sendCmt">
    </form>
    <hr>
    <?php
    foreach($bl as $value){
        echo $value['noidung'];
    }
    ?>
</body>
</html>