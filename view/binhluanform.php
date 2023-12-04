<?php 
    include '../models/pdo.php';
    include '../models/binhluan.php';
    session_start();
    $id_sp = $_REQUEST['id_sp'];
    if(isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $id_sp = $_POST['id_sp'];
        $id = $_SESSION['user']['id'];
        $noidung = $_POST['noidung'];
        $thoigian = date('h:i:sa d/m/y');
        insert_binhluan($id_sp, $id, $noidung, $thoigian);
        header("location: ". $_SERVER['HTTP_REFERER']);
    }
    $list_binhluan = loadAll_binhluan($id_sp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br>
    <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content">
    
            <div class="comments">
                <?php foreach($list_binhluan as $value): ?>
                    <div class="comment">
                        <div class="customer"><?php echo $value['username']; ?></div>
                        <div class="timestamp"><?php echo $value['ngaybinhluan']; ?></div>
                        <div class="content">
                            <?php echo $value['noidung']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <br>
                <?php 
                    if(isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                ?>
                    <h6>Thêm bình luận mới:</h6>
                    
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                        <input type="hidden" name="id_sp" value="<?=$id_sp?>">
                        <input id="comment-input" rows="4" cols="50" placeholder="Nhập bình luận của bạn" name="noidung">
                        <br>
                        <br>
                        <input name="guibinhluan" type="submit" class="btn-comment" value="Gửi bình luận">
                    </form>    
                <?php 
                    }else {
                ?>
                    <h6 class="alert alert-danger">ĐĂNG NHẬP ĐỂ BÌNH LUẬN!</h6> 
                <?php } ?>
                    
            </div>
    </div>
</body>
</html>