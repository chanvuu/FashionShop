<?php
    include 'database/ConnectDatabase.php';

    $id = $_GET['id'];
    $sql = "SELECT `categories`.`NAME` FROM `categories` WHERE `categories`.`IDCA` = '$id'";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);

    if ($result) {
        echo json_encode($row);
    } else {
        echo json_encode(array('error' => 'Không thể lấy dữ liệu loại sản phẩm'));
    }

    if(isset($_POST['submit'])){
        $name = $_POST['categoryName'];
        if(!empty($name)){
            $query = "UPDATE `categories` SET `NAME` = '$name' WHERE `categories`.`IDCA` = '$id'";
            $result = mysqli_query($con, $query);
            if($result){
                header('Location: /FashionShop-ChanVuBranch/layout/admin/category/category.php');
            } else{
                die(mysqli_error($con));
            }
        }
    }
?>
