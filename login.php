<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- js link -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <style type="text/css">
  	 body{
            margin: 0px;
            padding: 0px;
            background:url(https://www.automationglobes.com/wp-content/uploads/2016/10/argo-homepage-success-stories-banner.jpg) no-repeat fixed;
            background-position: center;
            background-size: cover;
            font-family: sans-serif;
            opacity: 0.9;
        }
  	.loginbox{
            width: 320px;
            height: 420px;
           	background-color: black;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
           /* box-sizing: border-box;*/
            padding: 70px 30px;

        }
         .avatar{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: 35%;
        }
        h1{
            margin: 0px;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
            color: white;
        }
        .loginbox label{
            margin: 0px;
            padding: 0px;
            font-weight: bold;
            color: white;
        }
        .loginbox input{
            width: 100%;
            margin-bottom: 20px;
        }
        .loginbox input[type="email"],
        .loginbox input[type="password"]{
           border:none;
            border-bottom: 1px solid red;
            background: transparent;
            outline-color: red;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .loginbox input:focus{
        outline-color: red;
    }
        .btn{
           width: 260px; 
           border-radius: 20px; 
        }
  </style>

</head>
<body>
	<div class="loginbox">
		<img src="male.png" class="avatar">
		<h1>Login Here</h1>
		<form method="POST">
			<div class="form-group">
				<label for="username">User Name:</label>
				<input style=" outline: none;" type="email" class="form-control" id="username" placeholder="Enter user name" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="upassword" placeholder="Enter password" name="upassword">
			</div>
			<button type="submit" class="btn btn-info">Login</button>
			<a href="forgetpassword.php">Forgot password</a>
		</form>
	</div>
</body>
</html>