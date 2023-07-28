


<!--   Phần content -->

<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <div class="row">
            <!-- <form action="../index.php" method="get"> -->
                <!-- <table class=" table">
                    <tr class="table-primary">
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr>
                
                            <tr class="table-success">
                                <td><input type="checkbox"></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href=""><input class="btn btn-success"  type="button" name="sua" value="Sửa"></a>
                                    <a href=""><input class="btn btn-warning" type="button" name="delete" value="Xóa"></a>
                                </td>
                            </tr>
                          
                    
                </table> -->

                <style>
        .account{
            background-color: #fff;
            /* opacity: ; */
            /* width: 400px; */
            /* height: 400px; */
            border-radius: 7px;
            /* margin: 170px auto; */
            /* overflow: hidden; */
            /* position: relative; */
            /* padding: 50px 50px; */
            text-align: center;
        }
        .title{
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 900;
            
        }

        .opa:hover{
            cursor: pointer;
            opacity: 0.7;
        }
        .danhmuc > input,.maloai > input{
            width: 100%;
            height: 50px;
            border-radius: 5px;
            border: 0.3px solid #cfcdcd;
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: 500;
            padding-left: 10px;
            outline: none;
        }
        .themmoi{
            margin-top: 5px;
            margin-bottom: 10px;
            margin-left: 7px;
            width: 100%;
            display : flex;
            justify-content: space-around;
        }
        /* .themmoi > a{
            background-color: rgb(60, 114, 231);

        } */
        .themmoi > input,
        .themmoi > a,
        .themmoi > a > input{
            /* margin-top: 20px; */
            height: 40px;
            border: 0.3px solid #cfcdcd;
            border-radius: 5px;
            width: 100%;
            /* margin: auto; */
            color: #fff;
            background-color: rgb(60, 114, 231);
            font-size: 16px;
        }
   
    </style>
    <div class="account">
        <form action="" method="post">
            <div class="title">
                <h3>Thêm mới danh mục</h3>
            </div>
            <div class="maloai opa">
                <input type="text" checked placeholder="mã danh mục" >
            </div>
            <div class="danhmuc opa">
                <input type="text" name="name_category" checked placeholder="tên danh mục">
            </div>
            <div class="themmoi">
                <input class="opa" type="submit" name= "addCategory" value="thêm mới"></input>
                <input class="opa" type="reset" value="nhập lại"></input>
                <a class="opa" href="<?= $ROOTt_URL?>/admin/listCategory"><input type="button" value="danh sách"></a>
            </div>
            <?php 
            if(isset($thongbao)&&$thongbao!=''){
                echo $thongbao;
            }
            ?> 
        </form>

        
    </div>
                <!-- <input type="button" class="btn btn-success" value="Chọn tất cả"></input>
                    <input type="button" class="btn btn-danger" value="Bỏ chọn tất cả"></input>
                    <input type="button" class="btn btn-warning" value="Xóa các mục chọn"></input>
                    <a href="./index.php?act=adddm"><input type="button" class="btn btn-info" value="Nhập lại"></input></a>
            </form> -->

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
