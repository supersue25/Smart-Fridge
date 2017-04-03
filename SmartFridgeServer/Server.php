<?php
function myfunction($v1,$v2)
{
return $v1.$v2."\n";
}
   	//$link=Connection();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['sensorNo'])){
      $sensorNo = $_POST['sensorNo'];
    }
    	include("connect.php");
    	$link=Connection();
    	$result=mysql_query("SELECT weight, timeStamp FROM weightLog WHERE sensorNo LIKE $sensorNo ORDER BY timeStamp DESC",$link);
$output =array();
//echo"$sensorNo\n";
      if($result!==FALSE){
		     while($row = mysql_fetch_array($result)) {
		        //$output = $output+ $row["sensorNo"]+" "+$row["weight"]+ "\n";
            //array_push($output,$row["sensorNo"],$row["weight"]);
            array_push($output,$row["weight"], $row["timeStamp"]);
		     }
		     mysql_free_result($result);
echo array_reduce($output,"myfunction");
		     mysql_close();
		  }
}else{
	echo "Error in POST method";
}
?>
