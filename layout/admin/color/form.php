<div id="add-item-form" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <br>
        <div class="card">
            <div class="card-header">
                Thêm
                <strong>Màu</strong>
            </div>
            <div class="card-body card-block">
                <form action="process.php" method="post" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-sm-5">
                            <label for="input-large" class=" form-control-label">Tên màu</label>
                        </div>
                        <div class="col col-sm-6">
                            <input type="text" id="input-large" name="input-large" placeholder="Hãy nhập tên màu"
                                class="input-lg form-control-lg form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-sm-5">
                            <label for="input-large" class=" form-control-label">Mã màu</label>
                        </div>
                        <div class="col col-sm-6">
                            <input type="text" id="input-large" name="input-large" placeholder="Hãy nhập mã màu"
                                class="input-lg form-control-lg form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>