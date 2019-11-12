<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
    <style>
        .login_fail{
            color: red;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body id="login">
  <div class="login-logo">
      <div style="width: 400px;height: 220px;margin-left: auto;margin-right: auto;background-color: rgba(0, 0, 0, 0.71)">
          <a href="#" ><img width="100px;" height="300px;" src="../imgaes/Tech%20Fest%20Final.png"/></a>
      </div>
    
  </div>
  <h2 class="form-heading">Event Heads Login</h2>
  <div class="app-cam">
	  <form method="post" action="php/login.php" name="login">
		<input required type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" name="email">
		<input required type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="password">
		<div class="submit"><input type="submit" name="submit" value="Login"></div>
	</form>
      <br>
      <div class="submit"><input class="btn btn-block btn-info" type="button" value="Registration" onclick="window.location.href = 'http://localhost/000/techfest/event_heads/register.php';"></div>
      <?php if(isset($_GET["fail"])){
    ?>
    <p class="login_fail" style="color:red;">Email or password incorrect</p>
<?php } ?>
  </div>
<?php include('include/footer.php');?>
</body>
</html>
