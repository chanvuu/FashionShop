<?php
    include 'database/ConnectDatabase.php';

    if(isset($_POST['submit'])){
        $name = $_POST['categoryName'];
        if(!empty($name)){
            $query = "INSERT INTO `categories`(`NAME`) VALUES ('$name')";
            $result = mysqli_query($con, $query);
            if($result){
                header('Location: /FashionShop-ChanVuBranch/layout/admin/category/category.php');
            } else{
                die(mysqli_error($con));
            }
        }
    }
?>