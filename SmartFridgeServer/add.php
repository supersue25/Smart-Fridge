<?php
    //$link=Connection();
if($_SERVER['REQUEST_METHOD']=='POST'){
  $weight="";
  $sensorNo="";
  //for testing on PostMan
  //localhost/SmartFridgeServer/add.php
  //x-www-form-urlencoded key-value! No quotes!
     	include("connect.php");
     	$link=Connection();
    if(isset($_POST['weight'])){
    $weight=$_POST['weight'];
    }
    if(isset($_POST['sensorNo'])){
      $sensorNo = $_POST['sensorNo'];
    }
    $query = "INSERT INTO weightLog (sensorNo, weight)
  		VALUES ('$sensorNo','$weight')";

     	mysql_query($query,$link);
  	mysql_close($link);
echo "success";
     	//header("Location: index.php");
  }else{
	echo "Error in POST method";
}
?>
