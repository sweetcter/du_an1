<div id="my-modal" class="modal1">
  <div class="modal-content">
    <span class="sign-in-close">&times;</span>
    <h2 style="text-align: center">Đăng nhập</h2>
    <form form action="../../du_an1/view/progess-login.php" method="POST" id="register-form" >
      <div class="form-group">
        <label for="username">Tài khoản:</label>
        <input type="text" id="username" name="username" required />
      </div>
      <label for="password">Mật khẩu:</label>
      <input type="password" id="password3" name="password" required />
      <a href=""><span class="quenmk">Quên mật khẩu?</span></a>
      <br />
      <button type="submit" id="submit-btn" class="buttonregister">Đăng nhập</button>
      <br />
      <div class="dangky">
        <span>Bạn chưa có tài khoản?</span>
        <a href="/register.html">Đăng ký thành viên</a>
      </div>
    </form>
    <p id="message"></p>
  </div>
</div>