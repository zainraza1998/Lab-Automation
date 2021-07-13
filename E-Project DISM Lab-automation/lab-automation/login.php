<?php include('main.php');
$ob->user_login();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  

  <script src="assets/js/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="assets/css/login.css">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="login">
    <div class="tabs">
      <div class="tab active">SIGN IN</div>
      <div class="tab">SIGN UP</div>
    </div>
    <form method="post">
      <div class="input">
        <input id="username" type="text" name="username"/>
        <label for="username">USERNAME</label>
      </div>
      <div class="input">
        <input id="password" type="password" name="psw"/>
        <label for="password">PASSWORD</label>
      </div>
      <input id="remember" type="checkbox" name="remember"/>
      <label for="remember">Keep me Signed in</label>
      <button type="submit" name="btn_login">SIGN IN</button>
      <div class="forgot"><span>Forgot Password?</span></div>
    </form>
  </div>
</div> -->
<!-- partial


<div class="wrapper">
  <div class="login">
    <div class="tabs">
      <div class="tab active">SIGN IN</div>
      <div class="tab">SIGN UP</div>
    </div>
    <form >
      <div class="input">
        <input id="username" type="text" />
        <label for="username">USERNAME</label>
      </div>
      <div class="input">
        <input id="password" type="password" />
        <label for="password">PASSWORD</label>
      </div>
      <input id="remember" type="checkbox" name="remember"/>
      <label for="remember">Keep me Signed in</label>

      <button type="button" id="btn-login">SIGN IN</button>
      <div id="error"
       style="color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    display:none">
  Error! Email and Password is wrong..
</div>
      <div class="forgot"><span>Forgot Password?</span></div>
    </form>
  </div>
</div> -->


<!-- <script>
document.getElementById('btn-login').addEventListener("click",function(){
  var user = document.getElementById('username').value;
  var psw = document.getElementById('password').value;

   $.ajax({
	  type:"get",
	  url:"main.php",
	  data:{btn_login:"true",username:user,password:psw},
	  success: function(response){
		  if(response == 1){
			  document.getElementById('error').style.display="block";
			  
	  }else{
		  window.location.href="index.php";
	  }
	  }

  })
  

});

</script> -->

  
</body>
</html>
