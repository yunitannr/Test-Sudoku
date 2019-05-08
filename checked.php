<?php 

	include "start.php";
	$names=$_POST['names'];

	if($names==$parts[$i]&&$names==$parts[$j]){
		echo "<td><input type='text' maxlength='1' name='names' value='".$parts[$j]."' style='color: red;''></td>";
	}

 ?>