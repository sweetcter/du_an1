

<!--   Phần content -->

<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <div class="row">
            <form action="" method="post">
                <table class=" table">
                    <tr class="table-primary">
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr>

                    <?php
                        foreach ($list as $key) {
                            extract($key);
                            $edit ="index.php?act=editCategory&id_cate=$id_category";
                            $delete ="index.php?act=deleteCategory&id_cate=$id_category";
                    
                    ?>
                
                            <tr class="table-success">
                                <td><input type="checkbox"></td>
                                <td><?php  echo $id_category?></td>
                                <td><?php  echo $name_category?></td>
                                <td>
                                    <a href="<?php echo $edit ?>"><input class="btn btn-success"  type="button" value="Sửa"></a>
                                    <a href="<?php echo $delete ?>"><input class="btn btn-warning" type="button" value="Xóa"></a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                          
                    
                </table>
                <input type="button" class="btn btn-success" value="Chọn tất cả"></input>
                    <input type="button" class="btn btn-danger" value="Bỏ chọn tất cả"></input>
                    <input type="button" class="btn btn-warning" value="Xóa các mục chọn"></input>
                    <a href=""><input type="button" class="btn btn-info" value="Nhập lại"></input></a>
            </form>

        </div>

    </div>
</div>


<div class="overlay"></div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="../src/admin/libs/jquery/jquery.min.js"></script>
<script src="../src/admin/libs/moment/min/moment.min.js"></script>
<script src="../src/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../src/admin/libs/peity/jquery.peity.min.js"></script>
<script src="../src/admin/libs/chart.js/Chart.bundle.min.js"></script>
<script src="../src/admin/libs/owl.carousel/owl.carousel.min.js"></script>
<script src="../src/admin/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../src/admin/libs/apexcharts/apexcharts.js"></script>
<script src="../src/admin/libs/simplebar/simplebar.min.js"></script>

<script src="../src/admin/js/main.js"></script>
<script src="../src/admin/js/dashboard.js"></script>
<script src="../src/admin/js/shortcode.js"></script>
<script src="../src/admin/js/pages/dashboard.js"></script>
