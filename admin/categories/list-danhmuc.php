<?php require "./header.php" ?>
<div class="main">
    <div class="main-content dashboard">
        <a href="./index.php?act=add-Category" class="mb-4">
            <button class="btn btn-primary">Thêm</button>
        </a>
        <div class="row">
            <form action="" method="post">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th></th>
                        <th>Tên loại</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $key) {
                            extract($key);
                            $edit = "index.php?act=editCategory&id_cate=$id_category";
                            $delete = "index.php?act=deleteCategory&id_cate=$id_category";

                        ?>
                            <tr>
                                <td></td>
                                <td><?php echo $name_category ?></td>
                                <td>
                                    <a href="<?php echo $edit ?>"><input class="btn btn-success" type="button" value="Sửa"></a>
                                    <a href="<?php echo $delete ?>"><input class="btn btn-warning" type="button" value="Xóa"></a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </form>

        </div>

    </div>
</div>


<div class="overlay"></div>
