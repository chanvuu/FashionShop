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
                    <!-- Form moi  -->
                    <div id="add-item-form" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    Input
                                    <strong>Sizes</strong>
                                </div>
                                <div class="card-body card-block">
                                    <form action="process.php" method="post" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-sm-5">
                                                <label for="input-small" class=" form-control-label">Small Input</label>
                                            </div>
                                            <div class="col col-sm-6">
                                                <input type="text" id="input-small" name="input-small"
                                                    placeholder=".form-control-sm"
                                                    class="input-sm form-control-sm form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-5">
                                                <label for="input-normal" class=" form-control-label">Normal
                                                    Input</label>
                                            </div>
                                            <div class="col col-sm-6">
                                                <input type="text" id="input-normal" name="input-normal"
                                                    placeholder="Normal" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-sm-5">
                                                <label for="input-large" class=" form-control-label">Large Input</label>
                                            </div>
                                            <div class="col col-sm-6">
                                                <input type="text" id="input-large" name="input-large"
                                                    placeholder=".form-control-lg"
                                                    class="input-lg form-control-lg form-control">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>order ID</th>
                                        <th>name</th>
                                        <th class="text-right">price</th>
                                        <th class="text-right">quantity</th>
                                        <th class="text-right">total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100398</td>
                                        <td>iPhone X 64Gb Grey</td>
                                        <td class="text-right">$999.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$999.00</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Send">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="More">
                                                    <i class="zmdi zmdi-more"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

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
    document.getElementById("add-item-btn").onclick = function () {
        document.getElementById("add-item-form").style.display = "block";
        document.querySelector(".header-desktop").style.opacity = "0.4"; // Thiết lập độ mờ cho header-desktop

    };



    // Đóng form khi nhấp vào nút đóng
    document.getElementsByClassName("close")[0].onclick = function () {
        document.getElementById("add-item-form").style.display = "none";
        document.querySelector(".header-desktop").style.opacity = "1"; // Thiết lập độ mờ cho header-desktop

    };
</script>