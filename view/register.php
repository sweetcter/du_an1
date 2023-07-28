<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="register-modal" class="modal">
        Modal content -->
         <div class="modal-content">
          <span id="close-button" class="close">&times;</span>
          <h2>Đăng ký</h2>
          <form action="female-fashion.php" method="POST" id="register-form">
            <div class="form-group">
            <label for="full_name">Full Name*</label>
            <input type="text" name="full_name" id="fullname" placeholder="Full name" required>
            </div>
            <div class="form-group">
            <label for="username">UserName*</label>
           <input type="text" name="username" id="fullname" placeholder="Username" required>
            </div>
            <div class="form-group">
            <label for="email">Email *</label>
             <input type="email" name="email" id="email" placeholder="Your email" required>
            </div>
  
            <div class="form-group">
              <label for="password">Password *</label>
             <input type="password" name="password" id="password" placeholder="Enter a password" required>
            </div>
            <div class="form-group">
              <label for="address">Address *</label>
              <input type="text" name="address" id="address" placeholder="Your address" required>
            </div>
            <div class="form-group">
               <label for="phone">Phone *</label>
               <input type="text" name="phone" id="phone" placeholder="Your phone" required>
            </div>
                    
            <button type="submit" class="button" name="dangky" >Đăng ký</button>
            
          </form>
          <?php 
                                      if(isset($thongbao)&&($thongbao)!=""){
                                          echo $thongbao ; } ?> 
        </div>
      </div>
</body>
</html>