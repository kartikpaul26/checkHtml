<?php 
	require 'connection.php';
	$s_id=$_GET['u_id'];
	$squery="SELECT `balance` FROM `subdealer` WHERE s_id=$s_id";
	$sdata=mysqli_query($conn,$squery);
	$sresult = mysqli_fetch_assoc($sdata);
	if (isset($_POST['sub-btn'])) {
			$date=$_POST['p_date'];
			$pmode=$_POST['p_mode'];
			$pname=$_POST['p_name'];
			$pacc=$_POST['p_acc'];
			$pamount=$_POST['p_amt'];
			$pbalance=$_POST['p_nbalance'];
			$query="INSERT INTO `order_payment`(`s_id`, `date`, `pmode`, `name`, `account`, `amount`, `balance`) VALUES ('$s_id','$date','$pmode','$pname','$pacc','$pamount','$pbalance')";
			$result=mysqli_query($conn,$query);
			if ($result) {
				$uquery="UPDATE `subdealer` SET `balance`='$balance' WHERE s_id=$s_id";
			$sdata=mysqli_query($conn,$uquery);
			header("Location: details.php?u_id=$s_id");
		}else{
			echo "Something went wrong";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- js link -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Payment</title>
	<script type="text/javascript">
		function check() {
  		var a = Number(document.getElementById('p_cbalance').value);
  		var b = Number(document.getElementById('p_amt').value);
  		var c=a-b;
  		document.getElementById('p_nbalancesh').value =c;
  		document.getElementById('p_nbalance').value =c;
  	}
	</script>
</head>
<body>
	<div class="container">
		<h1 class="text-center mt-3">Payment</h1>
		<form method="POST">
			<div class="form-group">
				<label for="p_date">Payment Date:</label>
				<input type="date" class="form-control" name="p_date" required>
			</div>
			<div class="form-group">
				<label for="p_mode">Payment Mode:</label>
				<select name="p_mode">
					<option value="NEFT">NEFT</option>
					<option value="RTGS">RTGS</option>
					<option value="Mobile Transfer">Mobile Transfer</option>
					<option value="Account Pay">Account Pay</option>
				</select>
			</div>
			<div class="form-group">
				<label for="p_name">Name:</label>
				<input type="text" class="form-control" name="p_name" required>
			</div>
			<div class="form-group">
				<label for="p_acc">Account:</label><br>
				<input type="radio" name="p_acc" value="Madina Sarif Traders" checked="">Madina Sarif Traders
				<input type="radio" name="p_acc" style="margin-left: 15px;" value="Rajbi Traders">Rajbi Traders
			</div>
			<div class="form-group">
				<label for="p_amt">Amount:</label>
				<input type="text" class="form-control" name="p_amt" id="p_amt" onkeyup="check()" required="">
			</div>
			<div class="form-group">
				<label for="p_cbalance">Current Balance</label>
				<input type="text" name="p_cbalancesh" class="form-control" id="p_cbalancesh" value="<?= $sresult['balance']; ?>" disabled>				
				<input type="hidden" class="form-control" name="p_cbalance" id="p_cbalance" value="<?= $sresult['balance']; ?>">
			</div>
			<div class="form-group">
				<label for="o_balance">New Balance:</label>
				<input type="text" class="form-control" name="p_nbalancesh" id="p_nbalancesh"  disabled>
				<input type="hidden" class="form-control" name="p_nbalance" id="p_nbalance" >
			<button type="submit" name="sub-btn">Submit</button>
		</form>
	</div>

</body>
</html>