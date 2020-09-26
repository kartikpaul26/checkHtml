
<!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- js link -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Details</title>
	   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">


        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
</head>
<body>
	<div class="container">
	<?php  
		require 'connection.php';
	$s_id=$_GET['u_id'];
	$query="SELECT * FROM `order_payment` WHERE s_id=$s_id ORDER BY s_id DESC";
	$data=mysqli_query($conn,$query);
	$row=mysqli_num_rows($data);
	$squery="SELECT `name` FROM `subdealer` WHERE s_id=$s_id";
	$sdata=mysqli_query($conn,$squery);
	$sresult = mysqli_fetch_assoc($sdata);
	?>
	<h1 style="text-align: center;"><?= $sresult['name']; ?></h1>
	<table id='myTable' class="display" cellspacing="0" width="100%" style="margin-top: 60px;">
	<thead>
		<tr>
			<th>SI No.</th>
			<th>Data</th>
			<th>Cement</th>
			<th>Track No</th>
			<th>Mode of Payment</th>
			<th>Name</th>
			<th>Account</th>
			<th>Bags</th>
			<th>Price</th>
			<th>Amount</th>
			<th>Balance</th>
		</tr>
		</thead>
		<tbody>
<?php
	if ($row>0){
		$i=0;
	while ($result = mysqli_fetch_assoc($data)) {
		
		$i=$i+1;
?>	
	
	<tr>

		<!-- <td><?= $result['id']; ?></td -->
		<td><?= $i ?></td>
		<td><?= $result['date']; ?></td>
		<td><?= $result['cement']; ?></td>
		<td><?= $result['track']; ?></td>
		<td><?= $result['pmode']; ?></td>
		<td><?= $result['name'];?></td>
		<td><?= $result['account']; ?></td>
		<td><?= $result['bag']; ?></td>
		<td><?= $result['price'];?></td>
		<td><?= $result['amount']; ?></td>
		<td><?= $result['balance']; ?></td>
	</tr>
	
<?php
	}
?>
</tbody>
<?php  
	}else{?>
		<tr><td >NO DATA FOUND</td></tr>
		
		<?php  
	}
?>

</table>
<div style="margin-top: 40px">
	<a href="view.php">Subdealer info</a>
</div>
</div>
</body>
</html>