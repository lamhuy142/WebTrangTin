<?php include("../inc/top.php"); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 style="color: #EA0029;" class="m-0 font-weight-bold ">SỬA THÔNG TIN </h6>
        </div>
        <div class="card-body">
            <form class="was-validated" method="post" enctype="multipart/form-data" action="index.php">
                <input type="hidden" name="action" value="xulysualoaikm">
                <input type="hidden" name="MaLKM" value="<?php echo $loai_ht['MaLKM'] ?>">
                <input type="hidden" name="trangthai" value="<?php echo $loai_ht['TrangThai'] ?>">
                <div class="row">
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="txtten" class="form-label">Tên</label>
                            <input required class="form-control" type="text" name="txtten" value="<?php echo $loai_ht['TenLKM'] ?>">
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Vui lòng điền tên .</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-3 mt-3">
                            <label for="txtdonvi" class="form-label">Đơn vị</label>
                            <input required class="form-control" type="text" name="txtdonvi" value="<?php echo $loai_ht['DonViKM'] ?>">
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Vui lòng điền đơn vị.</div>
                        </div>
                    </div>
                </div>
                <div class="md-3 mt-3">
                    <a href="index.php?action=danhmuc" class="btn btn-primary"><i class="bi bi-arrow-counterclockwise"></i> Trở về </a>
                    <input type="submit" value="Lưu" class="btn btn-success"></input>
                    <input type="reset" value="Hủy" class="btn btn-warning"></input>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("../inc/bottom.php"); ?>