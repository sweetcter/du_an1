<div id="my-modal" class="modal1">
  <div class="modal-content">
    <span class="sign-in-close">&times;</span>
    <h2 style="text-align: center">Đăng nhập</h2>
    <form action="index.php?action=login" method="POST">
      <div class="form-group">
        <label for="username">Tài khoản:</label>
        <input type="text" id="username" name="username" required />
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password3" name="password" required />
        <a href=""><span class="quenmk" id="openQuen">Quên mật khẩu?</span></a>
      </div>
      <br />
      <button type="submit" name="login" id="submit-btn" class="buttonregister">Đăng nhập <style>

        </style></button>
      <br />
      <div class="dangky">
        <span>Bạn chưa có tài khoản?</span>
        <a href="/register.html">Đăng ký thành viên</a>
      </div>
    </form>
    <p id="message"></p>
  </div>
</div>