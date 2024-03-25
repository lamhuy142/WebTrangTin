<?php include("../inc/top.php"); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 style="color: #EA0029;" class="m-0 font-weight-bold">THÊM CHƯƠNG TRÌNH KHUYẾN MÃI</h6>
        </div>
        <div class="card-body">
            <form class="was-validated" method="post" enctype="multipart/form-data" action="index.php">
                <input type="hidden" name="action" value="xulythemkm">

                <div class="row">
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="txttenkm" class="form-label">Tên khuyến mãi</label>
                            <input class="form-control" type="text" name="txttenkm" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Vui lòng điền tên khuyến mãi.</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="txttieude" class="form-label">Tiêu đề</label>
                            <input class="form-control" type="text" name="txttieude" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Vui lòng điền tiêu đề.</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="optloai" class="form-label">Loại khuyến mãi</label>
                            <select class="form-select" required name="optloai">
                                <option value="">Chọn loại khuyến mãi</option>
                                <?php foreach ($loaikhuyenmai as $l) : ?>
                                    <option value="<?php echo $l['MaLKM']; ?>"><?php echo $l['TenLKM']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">Vui lòng chọn loại khuyến mãi</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="optloaisim" class="form-label">Loại sim</label>
                            <select class="form-select" required name="optloaisim">
                                <option value="">Chọn loại sim</option>
                                <?php foreach ($loaisim as $ls) : ?>
                                    <option value="<?php echo $ls['MaLS']; ?>"><?php echo $ls['TenLS']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">Vui lòng chọn loại sim</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="txtgiatri" class="form-label">Giá trị khuyến mãi</label>
                            <input class="form-control" type="number" name="txtgiatri" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Vui lòng nhập giá trị khuyến mãi.</div>
                        </div>
                    </div>
                    <div class="col md-3 mt-3">
                        <label for="fileanh" class="form-label">Hình Ảnh</label>
                        <input type="file" class="form-control" name="fileanh" required></input>
                        <div class="valid-feedback">Hợp lệ.</div>
                        <div class="invalid-feedback">Vui lòng chọn hình ảnh .</div>
                    </div>
                    <!-- <div class="col">
                        <div class="md-3 mt-3">
                            <label for="txtdonvi" class="form-label">Đơn vị khuyến mãi</label>
                            <input class="form-control" type="text" name="txtdonvi" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Vui lòng nhập đơn vị khuyến mãi.</div>
                        </div>
                    </div> -->
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="trangthai" class="form-label">Trạng Thái</label>
                            <input class="form-control" type="number" name="trangthai" value="1" readonly required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Vui lòng nhập trạng thái khuyến mãi.</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="txtmota" class="form-label">Mô tả</label>
                            <textarea id="editor" rows="5" class="form-control" name="txtmota"></textarea>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Hãy nhập mô tả khuyến mãi.</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="ngaybd" class="form-label">Ngày bắt đầu</label>
                            <input class="form-control" type="date" name="ngaybd" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Vui lòng chọn ngày bắt đầu chương trình khuyến mãi.</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="ngaykt" class="form-label">Ngày kết thúc</label>
                            <input class="form-control" type="date" name="ngaykt" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Vui lòng chọn ngày kết thúc chương trình khuyến mãi.</div>
                        </div>
                    </div>
                </div>
                <div class="md-3 mt-3">
                    <a href="index.php?action=xem" class="btn btn-primary"><i class="bi bi-arrow-counterclockwise"></i> Trở về </a>
                    <input type="submit" value="Lưu" class="btn btn-success"></input>
                    <input type="reset" value="Hủy" class="btn btn-warning"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("../inc/bottom.php"); ?>