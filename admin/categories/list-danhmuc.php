   
<div class="main">
    <div class="main-content dashboard">
        <div class="row">
            <form action="" method="post">
                <table class=" table">
                    <tr class="table-primary">
                        <th></th>
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


