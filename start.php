<!DOCTYPE html>
<html>
<head>
	<title>Start Sudoku</title>
	<link rel="stylesheet" type="text/css" href="sudoku-style.css">
</head>
<body>

<img class="img-bk" src="image/bg.png">
	<div class="content">
	<form method="POST" action="">
		<table>
		<?php
			$fh = fopen("soal.txt", "r");
				while(true)
				{
 				   $line = fgets($fh);
 				   $parts= explode(',', $line);

  					  if($line == null)break;
 						for ($i=0; $i < 1 ; $i++) {
 						echo "<tr>";
 							for ($j=0; $j < 9; $j++){

 								if ($parts[$j]==0) {
 									echo "<td><input type='text' maxlength='1' name='names' value=''></td>";			
 								}
 								else{
 								echo "<td><input type='text' name='names' maxlength='1' value='".$parts[$j]."' disabled='true'></td>";
 								}
 						
 							}		
 						echo "</tr>";
 						}
				}
			fclose($fh);
		?>
		</table>
	</form>
	<br>
	<p align="center"><a href="selese.php"><img src="image/finish.png"></a></p>
	<div class="but">
		<a href="checked.php"><img src="image/cek.png" style="width: 100px; height: 40px;"></a>
	</div>
	</div>
</body>
</html>