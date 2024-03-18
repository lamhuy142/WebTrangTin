<?php
require("../../model/database.php");
require("../../model/nguoidung.php");
require("../../model/quyen.php");

// Biến $isLogin cho biết người dùng đăng nhập chưa
// $isLogin = isset($_SESSION["nguoidung"]);
// Kiểm tra hành động $action: yêu cầu đăng nhập nếu chưa xác thực
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
    // } elseif ($isLogin == FALSE) {
    //     $action = "dangnhap";
} else {
    $action = "macdinh";
}
$nd = new NGUOIDUNG();
$q = new QUYEN();
switch ($action) {
    case "macdinh":
        include("main.php");
        break;
    case "dangnhap":
        include("login.php");
        break;
    case "xldangnhap":

        $email = $_POST["txtemail"];
        $matkhau = $_POST["txtpassword"];

        // Kiểm tra tính hợp lệ của email và mật khẩu
        // if (validateEmail($email) && validatePassword($matkhau)) {
        if ($nd->kiemtranguoidunghople($email, $matkhau) == TRUE) {
            $_SESSION["nguoidung"] = $nd->laythongtinnguoidung($email);
            if ($_SESSION["nguoidung"]["TrangThai"] == 1) {
                include("main.php");
            }
            //     elseif ($_SESSION["nguoidung"]["loaind_id"] == 2) {
            //         header("Location:../../public/index.php");
            //     } else {
            //         $thongbao = "Nhập sai mật khẩu hoặc email";
            //         include("signin.php");
            //     }
            // } else {
            //     $thongbao = "Nhập sai mật khẩu hoặc email";
            //     include("signin.php");
            // }
        } else {
            $thongbao = "Mật khẩu hoặc email khôgn hợp lệ";
            include("signin.php");
        }
        break;
    default:
        break;
}
