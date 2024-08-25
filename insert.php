<?php
$db = mysqli_connect('localhost', 'root', 'root', 'daanishdatabase');
if(!$db){
	echo"connection failed";
}
{
	echo"connection successfull";
}

if(isset($_POST['submit'])){
$sname  = $_POST['sname'];
$fname  = $_POST['fname'];
$dobdate  = $_POST['dobdate'];
$bform  = $_POST['bform'];
$hadres = $_POST['haddress'];
$tadres = $_POST['taddress'];
$dadres = $_POST['daddress'];
$spic   = $_POST['spicture'];
$faname  = $_POST['faname'];
$mname  = $_POST['mname'];
$gname  = $_POST['gname'];
$fcnic  = $_POST['fcnic'];
$mcnic  = $_POST['mcnic'];
$gcnic  = $_POST['gcnic'];
$focup  = $_POST['foccupation'];
$mocup  = $_POST['moccupation'];
$gocup  = $_POST['goccupation'];
$fincom = $_POST['fincome'];
$mincom = $_POST['mincome'];
$fqualfy= $_POST['fqualification'];
$mqualfy= $_POST['mqualification'];
$gqualfy= $_POST['gqualification'];
$spschl = $_POST['spresentschool'];
$nopschl = $_POST['nopschool'];
$dobaschl= $_POST['dobdate-a-to-schl'];
$pname   = $_POST['pname'];
$psconnum= $_POST['pscontact-number'];
$r1name  = $_POST['r1name']; 
$r1rltn  = $_POST['r1relation'];
$r1num   = $_POST['r1num'];
$r2name  = $_POST['r2name'];
$r2rltn  = $_POST['r2relation'];
$r2num   = $_POST['r2num'];
$r3name  = $_POST['r3name'];
$r3rltn  = $_POST['r3relation'];
$r3num   = $_POST['r3num'];$spic =    
$_FILES['spicture'];



$filename = $_FILES['spicture']['name'];

	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	if( in_array($imageFileType,$extensions_arr)){
 
	move_uploaded_file($_FILES["spicture"]["tmp_name"],'studentpics/'.$filename);
	}
		
$sql = "INSERT INTO admission(sname,fname,dopdate,bform,haddress,taddress,daddress,faname,mname,gname,fcnic,mcnic,gcnic,foccupation,moccupation,goccupation,fincome,mincome,fqualification,mqualification,gqualification,spreviousschool,spreviousnames,sdobacording,pname,pscontact,r1name,r1relation,r1number,r2name,r2relation,r2number,r3name,r3relation,r3number,spicture)VALUES('$sname','$fname','$dobdate','$bform','$hadres','$tadres','$dadres','$faname','$mname','$gname','$fcnic','$mcnic','$gcnic','$focup','$mocup','$gocup','$fincom','$mincom','$fqualfy','$mqualfy','$gqualfy','$spschl','$nopschl','$dobaschl','$pname','$psconnum','$r1name','$r1rltn','$r1num','$r2name','$r2rltn','$r2num','$r3name','$r3rltn','$r3num','$filename')";

if(mysqli_query($db,$sql))
{
	echo"New Record Added";
}
else{
		echo "Error:" . $sql . "<br>" . $db->error;
}
}

?>
