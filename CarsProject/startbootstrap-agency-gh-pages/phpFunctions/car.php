<?php 
	function viewCarDetails($id){
		$con = mysqli_connect('localhost','root','','onlinecars');
		$sql= "SELECT * FROM newcars where id ='".$id."'";
		$res = mysqli_query($con,$sql);
		$car= mysqli_fetch_all($res,MYSQLI_ASSOC);
		foreach($car as $c){
			$carname = $c['name'];
			$carvalue = $c['value'];
	
		}
		return $carname ;	
	}
	function viewCarDetails2($id){
		$con2 = mysqli_connect('localhost','root','','onlinecars');
		$sql2= "SELECT * FROM newcars where id ='".$id."'";
		$res2 = mysqli_query($con2,$sql2);
		$car2= mysqli_fetch_all($res2,MYSQLI_ASSOC);
		foreach($car2 as $c2){
			$carname2 = $c2['name'];
			$carvalue2 = $c2['value'];
	
		}
		return $carvalue2;	
	}
	function viewCarDetails3($id){
		$con = mysqli_connect('localhost','root','','onlinecars');
		$sql3= "SELECT * FROM newcars where id ='".$id."'";
		$res3 = mysqli_query($con,$sql3);
		$car3= mysqli_fetch_all($res3,MYSQLI_ASSOC);
		foreach($car3 as $c3){
		
			$cardet = $c3['Details'];
	
		}
		return $cardet ;	
	}
	function viewCarDetails4($id){
		$con = mysqli_connect('localhost','root','','onlinecars');
		$sql4= "SELECT * FROM newcars where id ='".$id."'";
		$res4 = mysqli_query($con,$sql4);
		$car4= mysqli_fetch_all($res4,MYSQLI_ASSOC);
		foreach($car4 as $c4){
		
			$carImg = $c4['Image'];
	
		}
		return $carImg ;	
	}
	if(isset($_GET['id']) ){
		$id=$_GET['id'];
	}
	$con = mysqli_connect('localhost','root','','onlinecars');
	$sql7="SELECT * FROM admin ";
	$adm = mysqli_fetch_all(mysqli_query($con,$sql7),MYSQLI_ASSOC);




 ?>
 <?php if(isset($_GET['id'])){ ?>
 <?php $id = $_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style >
		.topdiv{
			margin-top:60px;
			position: relative;
			left:500px;
			width: 600px
		}
		.nimg{
			position: absolute;
			width: 300px;
			top:40px;
			left: 120px;
			border:5px solid #d9d9e0;
			border-radius: 50%; 

		}

	</style>
</head>
<body>
<div class="mother">
	<div class="topdiv" >
		<h1>قم باختيار سياره احلامك</h1>
		<h2><?php echo viewCarDetails($id); ?></h2>
		<hr>
		<p>
			<?php echo viewCarDetails3($id); ?> 
		</p>
	</div>
	<div class="botdev">
		<img src='../img/<?php echo viewCarDetails4($id) ?>' class="nimg">
		<div style="background: #d9d9e0;width: 4px;height: 470px;position: absolute;left:270px;top: 270px">
			
		</div>
		<ul>
		<h2 style="position: relative;top:100px;left: 260px"><li>اسم السياره</li></h2>
		<h2 style="position: relative;top:110px;left: 330px"><?php echo viewCarDetails($id); ?></h2>
		<h2 style="position: relative;top:140px;left: 260px"><li>سعر السياره</li></h2>
		<h2 style="position: relative;top:140px;left: 330px"><?php echo viewCarDetails2($id); ?></h2>
		<h2 style="position: relative;top:170px;left: 260px"><li>تواصل عبر البريد الالكتروني</li></h2>
		<h2 style="position: relative;top:160px;left: 330px"><?php echo $adm[0]['email'] ?> </h2>
		<h2 style="position: relative;top:180px;left: 260px"><li>تواصل من خلال رقم الموبايل</li></h2>
		<h2 style="position: relative;top:170px;left: 330px"><?php echo $adm[0]['phone'] ?>  </h2>
		</ul>
	</div>
</div>

</body>
</html>
<?php } ?>