<?php 
	require 'connection.php';
	$s_id=$_GET['u_id'];
	$squery="SELECT `balance` FROM `subdealer` WHERE s_id=$s_id";
	$sdata=mysqli_query($conn,$squery);
	$sresult = mysqli_fetch_assoc($sdata);
	//echo $sresult['balance'];
	if (isset($_POST['sub-btn'])) {
			
		$date=$_POST['o_date'];
		$cement=$_POST['o_cement'];
		$track=$_POST['o_track'];
		$bag=$_POST['o_bag'];
		$price=$_POST['o_price'];
		$amount=$_POST['o_amount'];
		$balance=$_POST['o_nbalance'];
		//$uquery="UPDATE `subdealer` SET `balance`='$balance' WHERE s_id=$s_id";exit();
		$query="INSERT INTO `order_payment`( `s_id`, `date`, `cement`, `track`, `bag`, `price`, `amount`, `balance`) VALUES ('$s_id','$date','$cement','$track','$bag','$price','$amount','$balance')";
		
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
	<title>order</title>
	
  <script type="text/javascript">
  	function check() {
  		var a = Number(document.getElementById('o_bag').value);
  		var b = Number(document.getElementById('o_price').value);
  		var c=a*b;
  		document.getElementById('o_amt').value =c;
  		document.getElementById('o_amountsh').value =c;
  		var d = Number(document.getElementById('o_cbalance').value);
  		//alert(d);
  		var e=d+c;
  		document.getElementById('o_nbalancesh').value =e;
  		document.getElementById('o_nbalance').value =e;

  	}

  </script>	
</head>
<body>
	<div class="container">
		<h1 class="text-center mt-3">Order</h1>
		<form method="POST">
			<div class="form-group">
				<label for="o_date">Order Date</label>
				<input type="date" class="form-control" name="o_date" required> 
			</div>
			<div class="form-group">
				<label for="o_cement">Cement Brand:</label>
				<select name="o_cement" required>
					<option value="ACC">ACC</option>
					<option value="F2R">F2R</option>
					<option value="Konark">Konark</option>
					<option value="Dalmia">Dalmia</option>
					<option value="DSP">DSP</option>
					<option value="SSC">SSC</option>
					<option value="SSC+">SSC+</option>
					<option value="Tata">Tata</option>
					<option value="Tata+">Tata+</option>
					<option value="Unitech">Unitech</option>
					<option value="Unitech+">Unitech+</option>
					<option value="JSW">JSW</option>
					<option value="JSW Cone">JSW Cone</option>
				</select>
			</div>
			<div class="form-group">
				<label for="o_track">Truck Number:</label>
				<input type="text" class="form-control" name="o_track" required>
			</div>
			<div class="form-group">
				<label for="o_bag">Bags:</label>
				<input type="text" class="form-control" name="o_bag" id="o_bag" required>
			</div>
			<div class="form-group">
				<label for="o_price">Price:</label>
				<input type="text" class="form-control" name="o_price" id="o_price" onkeyup="check()" required>
			</div>
			<div class="form-group">
				<label for="o_amt">Amount:</label>
				<input type="text" name="o_amountsh" class="form-control" id="o_amountsh" disabled>
				
				<input type="hidden" class="form-control" name="o_amount" id="o_amt">
			</div>
			<div class="form-group">
				<label for="o_amt">Current Balance</label>
				<input type="text" name="o_cbalancesh" class="form-control" id="o_cbalancesh" value="<?= $sresult['balance']; ?>" disabled>				
				<input type="hidden" class="form-control" name="o_cbalance" id="o_cbalance" value="<?= $sresult['balance']; ?>">
			</div>
			<div class="form-group">
				<label for="o_balance">New Balance:</label>
				<input type="text" class="form-control" name="o_nbalancesh" id="o_nbalancesh"  disabled>
				<input type="hidden" class="form-control" name="o_nbalance" id="o_nbalance" >
			</div>
			<button type="submit" name="sub-btn">Submit</button>
		</form>
	</div>
</body>
</html>