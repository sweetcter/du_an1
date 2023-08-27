<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập bằng Ajax</title>

</head>

<body>
    <label for="username">Tên đăng nhập:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Mật khẩu:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="button" id="dangnhap">Đăng nhập</button>
    <span id="message" style="color: red;"></span>
    <!-- <a href="../../du_an1/admin/index.php" id="login_success" >12</a> -->
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dangnhap').click(function() {
            console.log("OK");
            var username = $('#username').val();
            var password = $('#password').val();
            $.ajax({
                type: 'POST',
                url: './login.php',
                data: {
                    username: username,
                    password: password
                },
                dataType: "json",
                success: function(result) {
                    const firstMessage = 0;
                    if (result[firstMessage].status === "success") {
                        location.href = `../../du_an1/admin/index.php`;
                        console.log(result);
                    } else {
                        $("#message").text(result[firstMessage].message);
                    }
                },
                error: function(error) {
                    console.log("lỗi", error);
                },
            });
        });
    });
</script>