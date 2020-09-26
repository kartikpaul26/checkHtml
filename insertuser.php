<?php  
	require "connection.php";
	if (isset($_POST['sub-btn'])) {
		$name = $_POST['u_name'];
		$address = $_POST['u_address'];
		$balance = $_POST['u_balance'];


		$query = "INSERT INTO `subdealer`( `name`, `address`, `balance`) VALUES ('$name','$address','$balance')";
		$data = mysqli_query($conn,$query);
		if ($data) {
			echo "successfully inserted";
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
		background-image: url('https://i.stack.imgur.com/p9mUO.jpg');
	}
	label{
		color: white;
	}
	input[type="text"],
	input[type="date"],
	textarea[type="text"]{
		 border:none;
            border-bottom: 1px solid red;
            background: transparent;
            outline-color: red;
            height: 40px;
            color: black;
            font-size: 16px;
	}
</style>

	<title>Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- js link -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin-top: 20px;">
		<form method="POST" style="margin-top: 50px;">
			<div class="text-center">
			<h2 style="color: white;">Add Sub-dealer</h2>
		</div>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="u_name" id="u_name" class="form-control" placeholder="Enter Name">
			</div>
				<div class="form-group">
				<label >Address:</label>
				<textarea type="text" rows="4" class="form-control" style="resize: vertical;" placeholder="Enter address" name="u_address" id="u_address"></textarea>
			</div>
			<div class="form-group">
				<label>Balnce</label>
				<input type="text" name="u_balance" id="u_balance" class="form-control" placeholder="Enter Balnce">
			</div>
			<button type="submit" class="btn btn-success" name="sub-btn" id="sub-btn" style="text-align: center;">submit</button>
		</form>
		<div>
			<a href="view.php">Subdealer info</a>
		</div>
	</div>
</body>
</html>







