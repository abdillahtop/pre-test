<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form id="form" action="coba.php" method="POST">
    <td>Masukkan nilai Decimal :</td>
    <td><input type="text" name="decimal"></td>

	</form>
	<td>nilai Binary :</td>
	<td>
    <?php
	$input_array = $_POST['decimal'];

	$nilaidecimal = $input_array;
	$binary = '';
	if(preg_match('/[^0-9]/',$nilaidecimal)){
		die("Inputan Salah gan..");
	}else {
		while ($nilaidecimal>0) {
			if ($nilaidecimal%2 == 0){
				$binary .= 0;
				$nilaidecimal /= 2;
			}
			else{
				$binary .=1;
				$nilaidecimal = ($nilaidecimal/2)-0.5;
			}
		}
		$result = strrev($binary);
	}
	echo $result;
?>
</td>

</body>
</html>