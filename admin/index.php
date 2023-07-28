<?php
require "./header.php";
require "../global.php";
require "..$MODEL_URL/pdo.php";
require "..$MODEL_URL/product.php";
require "../model/category.php";

$act = isset($_GET['act']) ? $_GET['act'] : 'index';
switch ($act) {
    case 'index':
        require "./home.php";
        break;
    case 'view_product':
        require ".$PRODUCT_URL/productList.php";
        break;
    case 'add-Category':
   
        if((isset($_POST['addCategory']))&&($_POST['addCategory'])){
            $name_category=$_POST['name_category'];
            insertCategory($name_category);
            $thongbao="add thanh cong";
        }
        include "./categories/add-danhmuc.php";
        break;
    case "listCategory":
        $list=listCategory();
        include "./categories/list-danhmuc.php";
        break;
    case "editCategory":
        if(isset($_GET['id_cate'])&&($_GET['id_cate']>0)){
            $id_category=$_GET['id_cate'];
            $list_one=select_one_category($id_category);
        }
        if((isset($_POST['addCategory']))&&($_POST['addCategory'])){
            $id_category=$_POST['id_category'];
            $name_category=$_POST['name_category'];
            update_category($name_category,$id_category);
            $thongbao="update thanh cong";
        }
        include "./categories/edit-danhmuc.php";
        break;
    case "deleteCategory":
        if(isset($_GET['id_cate'])&&($_GET['id_cate']>0)){
            $id_category=$_GET['id_cate'];
            delete($id_category);
        } 
        $list=listCategory();
        include "./categories/list-danhmuc.php";
        break;
    // case "updateCategory":

    //     require "./categories/edit-danhmuc.php";
    //     break;
    default:
        echo "Không có gì";
        echo "admin";
        break;
}
require "./footer.php";

