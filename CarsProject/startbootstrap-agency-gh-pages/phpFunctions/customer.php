<?php
$con =mysqli_connect('localhost','root','','onlinecars');
$restype = mysqli_query($con,"SELECT * FROM carstype");
$type = mysqli_fetch_all($restype,MYSQLI_ASSOC);

if(isset($_POST['addusedcar'])){
$con =mysqli_connect('localhost','root','','onlinecars');

$carname = $_POST['carname'];
$carprice = $_POST['carprice'];
$cartype = $_POST['cartype'];
$carimg = $_POST['carimg'];
$cardet = $_POST['cardet'];
$sqlenwcar ="INSERT INTO  usedcars (name,value,type,image,Details,Owner) VALUES ('".$carname."','".$carprice."','".$cartype."','".$carimg."','".$cardet."','1')  ";
$resnewacr = mysqli_query($con,$sqlenwcar);
if($resnewacr){

	header('location:http://localhost/CarsProject/CarsProject/startbootstrap-agency-gh-pages/phpFunctions/admin.php');
	$newcar =mysqli_fetch_all($resnewacr,MYSQLI_ASSOC);

}

	header('location:http://localhost/CarsProject/CarsProject/startbootstrap-agency-gh-pages/phpFunctions/admin2.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<style>
		.oldCar h2{
			display: inline-block;
			position: relative;
			top:20px;
			left: 370px;
			padding: 40px;
			border:2px solid black;
		}
		.newCar h2{
			display: inline-block;
			position: relative;
			bottom: 130px;
			left: 670px;
			padding: 40px;
			border:2px solid black; 
		}
		a{
			text-decoration: none;
		}
				.Add{
			border: 2px solid black;
			height: 400px;
			width: 500px;
			position: relative;
			bottom:50px;
			left: 370px;
			padding-left: 40px; 
		}
		input{
			display: block;
			margin-top: 10px;
			margin-left: 30px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body >

<div class="container">
	<div style="position: absolute;right: 60px;top:30px;border: 2px solid black;padding: 10px;border-radius: 50%">
	<a href="http://localhost/CarsProject/CarsProject/startbootstrap-agency-gh-pages/" >Back</a>
</div>
<div class="row">

<div class="Add" style="margin-top: 200px;">
	<form action="admin2.php" method="POST">
	<h2 style="text-align: center;">Add Used Car</h2>
	Car Name: <input type="text" name="carname">
	Car Price: <input type="text" name="carprice">
	Car Type:<select name="cartype">
			<?php foreach($type as $tp){ ?>
				<option> <?php echo $tp['id'];  ?></option>
			<?php } ?>
			 </select> 
			 <br>
	Car Image: <input type="file" name="carimg" style="display: inline-block;">
	<br>
	<label style="margin-top: 20px">Car Details: </label> <textarea style="margin-top: 20px;" name="cardet">
		
	</textarea>
	<input type="submit" name="addusedcar" style="position: relative;left: 150px;top: 30px" value="Add">
	</form>
</div>
	
	
</div>
	</div>
</body>
</html>