
<script>
        
        function  showError(input, message) 
{
    let parent = input.parentElement;
    let small = parent.querySelector('small');
    parent.classList.add('error')
    small.innerText = message
}

function  showSuccess(input) 
{
    let parent = input.parentElement;
    let small = parent.querySelector('small');
    parent.classList.remove('error')
    small.innerText = ''
}



function validateForm_dangky(){
 
  let full_name = document.forms["register-form"]["full_name"];
  let username = document.forms["register-form"]["username"];
  let email = document.forms["register-form"]["email"];
  let password = document.forms["register-form"]["password"];
  let address = document.forms["register-form"]["address"];
  let phone = document.forms["register-form"]["phone"];



  let listInput = [full_name,username,email,password,address,phone] ;



  let isEmpty = false
  listInput.forEach(input => {
     input.value = input.value.trim()

     if(!input.value){
      isEmpty = false;
      showError(input, "trường này không được để trống.")
      // return isEmpty;
          //  console.log(input.type);
     }else if((input.value.length < 5)&&(input.type !='password')){
      isEmpty = false;
      showError(input, "trường này không được nhỏ hơn 5 ký tự.")
     }else if(input.type =='password'){
            if(input.value.length < 8){
              isEmpty = false;
              showError(input, "trường này tối thiếu phải có 8 ký tự")
            }
     }else{
      showSuccess(input)
      isEmpty = true;
     }
  });
  return isEmpty;

 
  
}



function validateForm_login(){
 
 let username_loign = document.forms["login_user"]["username_loign"];
 let password3 = document.forms["login_user"]["password3"];


 let listInput = [username_loign,password3];


let isEmpty = false
  listInput.forEach(input => {
     input.value = input.value.trim()

     if(!input.value){
      isEmpty = false;
      showError(input, "trường này không được để trống.");
     }else if((input.value.length < 5)&&(input.type !='password')){
      isEmpty = false;
      showError(input, "trường này không được nhỏ hơn 5 ký tự.");
     }else if(input.type =='password'){
            if(input.value.length < 8){
              isEmpty = false;
              showError(input, "trường này tối thiếu phải có 8 ký tự");
            }
     }else{
      showSuccess(input);
      isEmpty = true;
     }
  });
  return isEmpty;

 
}
    </script>
<footer>Coppy right 2023</footer>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script
      type="text/javascript"
      src="..<?= $ROOT_URL?>/asset/slick-master/slick/slick.min.js"
    ></script>
    <script type="text/javascript" src="..<?= $ROOT_URL?>/asset/js/slick.js"></script>
    <script type="text/javascript" src="..<?= $ROOT_URL?>/asset/js/mutipleRangeJquery.js"></script>
    <script type="text/javascript" src="..<?= $ROOT_URL?>/asset/js/orderDetail.js"></script>
    <script type="text/javascript" src="..<?= $ROOT_URL?>/asset/js/productDetail.js"></script>
    <script type="text/javascript" src="..<?= $ROOT_URL?>/asset/js/main.js"></script>
  </body>
</html>
