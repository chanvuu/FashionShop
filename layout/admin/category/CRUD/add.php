<?php
    $server = "localhost";
    $user = "root"; 
    $password = ""; 
    $database = "qlbanqa";
    $con = mysqli_connect($server, $user, $password, $database);

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