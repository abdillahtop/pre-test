<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form id="form" action="no2.php" method="POST">
    <td>Masukkan Input :</td>
    <td><input type="text" name="input"></td>
	</form>
    <?php
	$input = $_POST["input"];

	$bil_prima = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37];
	//membuat segitiga
	for ($i=0; $i <= $input-1; $i++) { 
		for ($j=0; $j <= $i ; $j++) { 
			print_r($bil_prima[$j]." ");
		}echo "<br>";
	}
?>
</body>
</html>