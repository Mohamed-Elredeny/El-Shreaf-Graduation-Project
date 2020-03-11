<?php 


$con = mysqli_connect('localhost','root','','onlinecars');

$sql =mysqli_query($con, "SELECT * FROM newcars ");
$res =mysqli_fetch_all($sql,MYSQLI_ASSOC);

$sql2= mysqli_query($con,"SELECT * FROM carstype");
$cats=mysqli_fetch_all($sql2,MYSQLI_ASSOC);


$sql3=mysqli_query($con,"SELECT * FROM usedcars");
$used=mysqli_fetch_all($sql3,MYSQLI_ASSOC);

$sql4=mysqli_query($con,"SELECT * FROM newcars where type=1");
$test = mysqli_fetch_all($sql4,MYSQLI_ASSOC);


$sql5=mysqli_query($con,"SELECT * FROM usedcars where type=2");
$test2= mysqli_fetch_all($sql5,MYSQLI_ASSOC);


//Login
	function login($username,$password,$submit){
	
		$con = mysqli_connect('localhost','root','','onlinecars');
		if(isset($_POST["$submit"])){
			$username =htmlspecialchars(mysqli_real_escape_string($con,$_POST['email']));
			$password =htmlspecialchars(mysqli_real_escape_string($con,$_POST['pswd']));
			if($username == Null || $password == Null){
				echo ' fields can not be empty<br>';

			}



			$sql = "SELECT * FROM admin WHERE email='".$username."' AND password='".$password."' ";
			$result = mysqli_query($con, $sql);
			if($result){
				//echo "Query Done";
			}
		
			$student = mysqli_fetch_all($result,MYSQLI_ASSOC);
			if(count($student) > 0){
				echo "done";
				header('location:phpFunctions/admin.php');
 			}else{
 				echo "Login field";
 			}
				
		
		
 			}
	

	}

	//practice
	

	login('email','pswd','login');
	//=================================================================================================//
	//login2



		function login2($username,$password,$submit){	
		$con = mysqli_connect('localhost','root','','onlinecars');
		if(isset($_POST["$submit"])){
			$username =htmlspecialchars(mysqli_real_escape_string($con,$_POST['email']));
			$password =htmlspecialchars(mysqli_real_escape_string($con,$_POST['pswd']));
			if($username == Null || $password == Null){
				echo ' fields can not be empty<br>';

			}



			$sql = "SELECT * FROM carsowner WHERE email='".$username."' AND password='".$password."' ";
			$result = mysqli_query($con, $sql);
			if($result){
				//echo "Query Done";
			}
		
			$student = mysqli_fetch_all($result,MYSQLI_ASSOC);
			if(count($student) > 0){
				echo "done";
				header('location:phpFunctions/customer.php');
 			}else{
 				echo "Login field";
 			}
				
		
		
 			}
		}
     	login2('email','pswd','login');


     //Register
		function signup($uname1,$upass1,$uemail1,$phone1,$type,$submit){
			$con = mysqli_connect('localhost','root','','onlinecars');

			if(isset($_POST["$submit"])){
			
			$uname11 =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$uname1"]));
			$upass11 =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$upass1"]));				
			$uemail11 =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$uemail1"]));
		
			$phone11 =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$uphone1"]));
			$typex=$type;
		
				if($typex == 'admin'){
			$sql = "INSERT INTO carsowner (name,password,email,phoneNumber) values('".$uname11."','".$upass11."','".$uemail11."','".$phone11."')";
			$result = mysqli_query($con,$sql);
			if($result){
				header('location:phpFunctions/admin.php');
			}
			
		header('location:index.php');
		}
		

		}

		}
		signup('uname1','upass1','uemail1','uphone1','admin','register');


		if(isset($_POST['sendmessage'])){
			$id = $_POST['cusid'];
			$cusname = $_POST['cusname'];
			$cusemail = $_POST['cusemail'];
			$cusphoneNumber = $_POST['cusphone'];
			$cusmessage = $_POST['cusmessage'];
			$sql6= "INSERT INTO messages ( CustomerID, Customername, Customeremail, Customerphone, Message) VALUES ('1','".$cusname."','".$cusemail."','".$cusphoneNumber."','".$cusmessage."')";
			$messres = mysqli_query($con,$sql6);
			if($messres){
				header('location:phpFunctions/admin.php');
			}
			header('location:index.php');

		}