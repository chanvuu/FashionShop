<?php require_once ("../index.php"); ?>
<div class="page-container">
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <!-- Thêm nút vào đây nếu cần -->
                    </div>
                    <div class="table-data__tool-right">
                        <button id="add-item-btn" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add item</button>
                    </div>
                    <!-- Form  -->
                    <?php include("add_form.php"); ?>
                </div>

                <!-- Form chỉnh sửa -->
                <?php include("edit_form.php"); ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Mã loại</th>
                                        <th>Loại sản phẩm</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include 'CRUD/selectAll.php';?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript -->
<script>
    //add-form
        document.getElementById("add-item-btn").onclick = function () {
        document.getElementById("add-item-form").style.display = "block";
        document.querySelector(".header-desktop").style.opacity = "0.4"; // Thiết lập độ mờ cho header-desktop

    };

    // Đóng form khi nhấp vào nút đóng
        document.getElementsByClassName("close")[0].onclick = function () {
        document.getElementById("add-item-form").style.display = "none";
        document.querySelector(".header-desktop").style.opacity = "1"; // Thiết lập độ mờ cho header-desktop

    };

        document.getElementsByClassName("btn btn-danger btn-sm")[0].onclick = function () {
        document.getElementById("add-item-form").style.display = "none";
        document.querySelector(".header-desktop").style.opacity = "1"; // Thiết lập độ mờ cho header-desktop

    };

    // Script để xử lý sự kiện khi nhấn nút Edit
    document.querySelectorAll(".edit-btn").forEach(btn => {
        btn.addEventListener("click", function() {
            var categoryId = this.dataset.id;
            console.log("categoryId:", categoryId);
            fetch("CRUD/edit.php?id=" + categoryId)
                .then(response => response.text())
                .then(data => {
                    console.log("Received data:", data);
                    document.getElementById("editCategoryNameId").value = data.name;
                    document.getElementById("editCategoryId").value = categoryId;
                    document.getElementById("edit-item-form").style.display = "block";
                    document.querySelector(".header-desktop").style.opacity = "0.4";
                });
        });
    });

    
    //cancel-edit
    document.querySelector("#cancelBtn").addEventListener("click", function() {
        document.getElementById("edit-item-form").style.display = "none"; // Ẩn block chỉnh sửa
        document.querySelector(".header-desktop").style.opacity = "1"; // Khôi phục độ mờ của header-desktop
    });

    //close-edit
    document.querySelector(".close").addEventListener("click", function() {
        document.getElementById("edit-item-form").style.display = "none"; // Ẩn form chỉnh sửa
        document.querySelector(".header-desktop").style.opacity = "1"; // Khôi phục độ mờ của header-desktop
    });

    //delete-confirm
    function confirmDelete() {
        if (confirm("Are you sure?") == true) {
            console.log("Hello world!");
        } else {
            return false;
        }
    }
</script>