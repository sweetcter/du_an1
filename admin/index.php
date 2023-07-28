<?php
require "./header.php";
require "../global.php";
require "..$MODEL_URL/pdo.php";
require "..$MODEL_URL/product.php";
require "../model/category.php";
require "../model/taikhoan.php";

$act = isset($_GET['act']) ? $_GET['act'] : 'index';
switch ($act) {
    case 'index':
        require "./home.php";
        break;
    case 'add_product':
        require ".$PRODUCT_URL/add_product.php";
        break;
    case 'view_product':
        require ".$PRODUCT_URL/productList.php";
        break;
    case 'add-Category':

        if ((isset($_POST['addCategory'])) && ($_POST['addCategory'])) {
            $name_category = $_POST['name_category'];
            insertCategory($name_category);
            $thongbao = "add thanh cong";
        }
        include "./categories/add-danhmuc.php";
    case 'update_product':
        require ".$PRODUCT_URL/update_product.php";
        break;
    case 'delete_product':
        require ".$PRODUCT_URL/delete_product.php";
        break;
    case "listCategory":
        $list = listCategory();
        include "./categories/list-danhmuc.php";
        break;
    case "editCategory":
        if (isset($_GET['id_cate']) && ($_GET['id_cate'] > 0)) {
            $id_category = $_GET['id_cate'];
            $list_one = select_one_category($id_category);
        }
        if ((isset($_POST['addCategory'])) && ($_POST['addCategory'])) {
            $id_category = $_POST['id_category'];
            $name_category = $_POST['name_category'];
            update_category($name_category, $id_category);
            $thongbao = "update thanh cong";
        }
        include "./categories/edit-danhmuc.php";
        break;
    case "deleteCategory":
        if (isset($_GET['id_cate']) && ($_GET['id_cate'] > 0)) {
            $id_category = $_GET['id_cate'];
            delete($id_category);
        }
        $list = listCategory();
        include "./categories/list-danhmuc.php";
        break;
        // case "updateCategory":

        //     require "./categories/edit-danhmuc.php";
        //     break;

        //--------------------------PHẦN TÀI KHOẢN-----------------------------------------
        // DANH SÁCH TÀI KHOẢN
    case 'user':
        $listtaikhoan = loadall_taikhoan();
        // echo $listtaikhoan; die;
        include "./user/list.php";
        break;


        // XÓA TÀI KHOẢN
    case 'xoatk':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            delete_taikhoan($_GET['id']);
        }
        $listtaikhoan = loadall_taikhoan();
        include "./user/list.php";
        break;
        // SỬA TÀI KHOẢN
    case 'suatk':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $tk = loadone_taikhoan($_GET['id']);
        }
        $listtaikhoan = loadall_taikhoan();
        include "./user/update.php";
        break;
        // UPDATE TÀI KHOẢN
    case 'updatetk':
        if (isset($_POST['id']) && ($_POST['id'] > 0)) {
            $id = $_POST['id'];
            $full_name = $_POST['full_name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            $image_user = $_FILES['image_user']['name'];
            $target_dir = "../uploads/";
            $target_file = $target_dir . basename($_FILES["image_user"]["name"]);

            if (move_uploaded_file($_FILES["image_user"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            $listsanpham = update_taikhoan($id, $full_name, $username, $password, $email, $address, $phone, $role, $image_user);
            $thongbao = "Cập nhật thành công";
        }
        $listtaikhoan = loadall_taikhoan();
        include "./user/list.php";
        break;
    default:
        echo "Không có gì";
        echo "admin";
        break;
}
require "./footer.php";
