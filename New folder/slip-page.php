<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daanish School</title>
	<link rel="stylesheet" type="text/css" href="slip-design.css">
	<style type="text/css">
		.container{
	height: 530px;
	width: 790px;
	margin: auto;
	border: 2px solid grey;
	margin-top: 70px;
	border: 3px solid grey;
	
     

}
     
		.logo{
			border-radius: 50%;
			margin:auto;

			
		}
	
		
		h2{
			text-align: center;
			font-size: 30px;
		}
		h4{
		text-align: center;
		margin-top: 1px;	
		}
		.plogo{
    width: 60px;
		}
		.slip-data{			
			padding-left: 110px;
			margin-top: 30px;
			font-size: 20px;
			
			width: 300px;
			display: inline-block;
		}
		.test-date{
            margin-left: 100px;
		}
		h3{
			margin-left: 90px;
		}
		.pic-div{
			width: 150px;
			height: 165px;
			border: 3px solid black;
			display: inline-block;
			margin-left: 170px;
			margin-top: 5px;

	}
	
	</style>
</head>
<body>
	
	<div class="container" style=" background: url('dlogo-4.jpg'); background-color: azure;">
		<div id="dddd">
			
			<!--<div class="log-div">
	  <bg-imgae ="Daanish-logo-02" height="530" width="790" margin-top="0" margin-left="0">
	  </div>	-->	
       <h2> <img src="dlogo.png" height="50px" width="50px" class="logo">&nbsp; &nbsp; &nbsp; <u> DAANISH SCHOOL BOYS CHISHTIAN</u> &nbsp; &nbsp; &nbsp;  <img  class="plogo" src="plogo.png" height="50px" width="50px" class="logo"></h2>
       <h4><p>Roll No Slip For Admission Test</p><h4>
       	</div><hr>
       	<div class="main-data">
       		<p class="slip-data">
       			
<?php
$db = mysqli_connect('localhost', 'root', 'root', 'daanishdatabase');
if(!$db){
     echo"connection failed";
}
{
     echo"";
}
if(isset($_POST['submit'])){
$bform = $_POST['getslip'];
$sql = "SELECT * FROM admission WHERE bform = $bform";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);

?>

<!-- -->
   <?php } ?>

                 

                    
       			<b> Roll #:</b><span>&nbsp;<?php echo $row['id']; ?></span><br><br>
       			<b>Name:</b><span>&nbsp;<?php echo $row['sname']; ?></span> <br><br>
       			<b>Father Name:</b><span>&nbsp;<?php echo $row['fname']; ?></span><br><br>		
       			<b>Date of Birth:</b><span>&nbsp;<?php echo $row['dopdate']; ?></span>
       		
       			<span>
       	<div class="pic-div">
       		<img src="studentpics/<?php echo $row['spicture'];?>" height="165" width="150"   >
       	</div>
</span>
       			<h3>&clubs; Instructions:</h3></span>
                 
       			<p class="test-date">-Student should arrive at the fixed time.<br>Otherwise he will not be entered.<br><br><b>Test date: 25 December 2023<br>Test time:8:30 AM - 11:30 AM</b>
       			</p>
                 
       		</p>

       	</div>
       
  
</div>
</body>
</html>