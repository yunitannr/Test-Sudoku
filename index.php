<!DOCTYPE html>
<html>
<head>
	<title>Sudoku</title>
	<link rel="stylesheet" type="text/css" href="sudoku-style.css">
</head>
<body>

<img class="img-bk" src="image/bg.png">
	<div class="content">
	<table>
			<tr>
				<td id="r0c0"><input type="text" maxlength="1"></td>
				<td id="r0c1"><input type="text" maxlength="1"></td>
				<td id="r0c2"><input type="text" maxlength="1"></td>
				<td id="r0c3"><input type="text" maxlength="1"></td>
				<td id="r0c4"><input type="text" maxlength="1"></td>
				<td id="r0c5"><input type="text" maxlength="1"></td>
				<td id="r0c6"><input type="text" maxlength="1"></td>
				<td id="r0c7"><input type="text" maxlength="1"></td>
				<td id="r0c8"><input type="text" maxlength="1"></td>
			</tr>
			<tr>
				<td id="r1c0"><input type="text" maxlength="1"></td>
				<td id="r1c1"><input type="text" maxlength="1"></td>
				<td id="r1c2"><input type="text" maxlength="1"></td>
				<td id="r1c3"><input type="text" maxlength="1"></td>
				<td id="r1c4"><input type="text" maxlength="1"></td>
				<td id="r1c5"><input type="text" maxlength="1"></td>
				<td id="r1c6"><input type="text" maxlength="1"></td>
				<td id="r1c7"><input type="text" maxlength="1"></td>
				<td id="r1c8"><input type="text" maxlength="1"></td>
			</tr>
			<tr>
				<td id="r2c0"><input type="text" maxlength="1"></td>
				<td id="r2c1"><input type="text" maxlength="1"></td>
				<td id="r2c2"><input type="text" maxlength="1"></td>
				<td id="r2c3"><input type="text" maxlength="1"></td>
				<td id="r2c4"><input type="text" maxlength="1"></td>
				<td id="r2c5"><input type="text" maxlength="1"></td>
				<td id="r2c6"><input type="text" maxlength="1"></td>
				<td id="r2c7"><input type="text" maxlength="1"></td>
				<td id="r2c8"><input type="text" maxlength="1"></td>
			</tr>
			<tr>
				<td id="r3c0"><input type="text" maxlength="1"></td>
				<td id="r3c1"><input type="text" maxlength="1"></td>
				<td id="r3c2"><input type="text" maxlength="1"></td>
				<td id="r3c3"><input type="text" maxlength="1"></td>
				<td id="r3c4"><input type="text" maxlength="1"></td>
				<td id="r3c5"><input type="text" maxlength="1"></td>
				<td id="r3c6"><input type="text" maxlength="1"></td>
				<td id="r3c7"><input type="text" maxlength="1"></td>
				<td id="r3c8"><input type="text" maxlength="1"></td>
			</tr>
			<tr>
				<td id="r4c0"><input type="text" maxlength="1"></td>
				<td id="r4c1"><input type="text" maxlength="1"></td>
				<td id="r4c2"><input type="text" maxlength="1"></td>
				<td id="r4c3"><input type="text" maxlength="1"></td>
				<td id="r4c4"><input type="text" maxlength="1"></td>
				<td id="r4c5"><input type="text" maxlength="1"></td>
				<td id="r4c6"><input type="text" maxlength="1"></td>
				<td id="r4c7"><input type="text" maxlength="1"></td>
				<td id="r4c8"><input type="text" maxlength="1"></td>
			</tr>
			<tr>
				<td id="r5c0"><input type="text" maxlength="1"></td>
				<td id="r5c1"><input type="text" maxlength="1"></td>
				<td id="r5c2"><input type="text" maxlength="1"></td>
				<td id="r5c3"><input type="text" maxlength="1"></td>
				<td id="r5c4"><input type="text" maxlength="1"></td>
				<td id="r5c5"><input type="text" maxlength="1"></td>
				<td id="r5c6"><input type="text" maxlength="1"></td>
				<td id="r5c7"><input type="text" maxlength="1"></td>
				<td id="r5c8"><input type="text" maxlength="1"></td>
			</tr>
			<tr>
				<td id="r6c0"><input type="text" maxlength="1"></td>
				<td id="r6c1"><input type="text" maxlength="1"></td>
				<td id="r6c2"><input type="text" maxlength="1"></td>
				<td id="r6c3"><input type="text" maxlength="1"></td>
				<td id="r6c4"><input type="text" maxlength="1"></td>
				<td id="r6c5"><input type="text" maxlength="1"></td>
				<td id="r6c6"><input type="text" maxlength="1"></td>
				<td id="r6c7"><input type="text" maxlength="1"></td>
				<td id="r6c8"><input type="text" maxlength="1"></td>
			</tr>
			<tr>
				<td id="r7c0"><input type="text" maxlength="1"></td>
				<td id="r7c1"><input type="text" maxlength="1"></td>
				<td id="r7c2"><input type="text" maxlength="1"></td>
				<td id="r7c3"><input type="text" maxlength="1"></td>
				<td id="r7c4"><input type="text" maxlength="1"></td>
				<td id="r7c5"><input type="text" maxlength="1"></td>
				<td id="r7c6"><input type="text" maxlength="1"></td>
				<td id="r7c7"><input type="text" maxlength="1"></td>
				<td id="r7c8"><input type="text" maxlength="1"></td>
			</tr>
			<tr>
				<td id="r8c0"><input type="text" maxlength="1"></td>
				<td id="r8c1"><input type="text" maxlength="1"></td>
				<td id="r8c2"><input type="text" maxlength="1"></td>
				<td id="r8c3"><input type="text" maxlength="1"></td>
				<td id="r8c4"><input type="text" maxlength="1"></td>
				<td id="r8c5"><input type="text" maxlength="1"></td>
				<td id="r8c6"><input type="text" maxlength="1"></td>
				<td id="r8c7"><input type="text" maxlength="1"></td>
				<td id="r8c8"><input type="text" maxlength="1"></td>
			</tr>
		</table>

		<br>

		<p align="center"><a href="start.php"><img src="image/mulai.png"></a></p>
</div></div>

</body>
</html>