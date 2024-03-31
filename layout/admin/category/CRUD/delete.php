<?php
    include 'database/ConnectDatabase.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $query = "UPDATE `categories` SET `status` = '1' WHERE `categories`. `IDCA` = $id";
        $result = mysqli_query($con, $query);
        if($result){
            header('Location: /FashionShop-ChanVuBranch/layout/admin/category/category.php');
        } else{
            die(mysqli_error($con));
        }
            
    }
    mysqli_close($con);
?>

<div id="edit-item-form" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <br>
        <div class="card">
            <div class="card-header" id="card-header">
                Sửa
                <strong>loại sản phẩm</strong>
            </div>
            <div class="card-body card-block">
                <form action="CRUD/add.php" method="post" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-sm-5">
                            <label for="categoryNameId" class=" form-control-label">Tên loại sản phẩm</label>
                        </div>
                        <div class="col col-sm-6">
                            <input type="text" id="categoryNameId" name="categoryName" placeholder="Hãy nhập tên loại sản phẩm"
                                class="input-lg form-control-lg form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" name="update" id="update">
                            <i class="fa fa-dot-circle-o"></i> Update
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm" name="cancelBtn">
                            <i class="fa fa-ban"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Lắng nghe sự kiện khi form được focus
    document.getElementById("edit-item-form").addEventListener("focus", function() {
        // Hiển thị "Thêm Loại sản phẩm" trong card-header khi click vào form
        document.getElementById("card-header").innerHTML = "Sửa <strong>loại sản phẩm</strong>";
    });

    document.getElementById("submit").addEventListener("click", function(event) {
        var categoryName = document.getElementById("categoryNameId").value;
        if (categoryName.trim() === "") {
            document.getElementById("card-header").innerHTML = '<span class="error-text">Hãy nhập dữ liệu !!!</span>';
            event.preventDefault(); // Ngăn chặn việc gửi form
        }
    });
</script>