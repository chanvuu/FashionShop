<div id="edit-item-form" style="display: none;" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <br>
        <div class="card">
            <div class="card-header" id="edit-card-header">
                Sửa
                <strong>loại sản phẩm</strong>
            </div>
            <div class="card-body card-block">
                <form method="post" class="form-horizontal" action="CRUD/edit.php">
                    <div class="row form-group">
                        <div class="col col-sm-5">
                            <label for="editCategoryNameId" class="form-control-label">Tên loại sản phẩm</label>
                        </div>
                        <div class="col col-sm-6">
                            <input type="text" id="editCategoryNameId" name="categoryName" placeholder="Hãy nhập tên loại sản phẩm" class="input-lg form-control-lg form-control">
                            <input type="hidden" id="editCategoryId" name="editCategoryId">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" name="update" id="update">
                            <i class="fa fa-dot-circle-o"></i> Update
                        </button>
                        <button type="reset" id="cancelBtn" class="btn btn-danger btn-sm" name="cancelBtn">
                            <i class="fa fa-ban"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
