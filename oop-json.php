<?php
$json = file_get_contents('demo2.json'); 
$product = json_decode($json, true); 
echo "<pre>";
//print_r($product);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>oop-json</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered">
	<tr class="table-primary">
		<th>name</th>
		<th>age</th>
		<th>street</th>
		<th>city</th>
		<th>state</th>
		<th>hobbies</th>
		<th>Employed</th>
		<th>salary</th>
		<th>email</th>
		<th>phone</th>
	</tr>
	<tr class="table">
		<td><?php echo $product['name']?></td>
		<td><?php echo $product['age']?></td>
		<td><?php echo $product['address']['street'] ?></td>
		<td><?php echo $product['address']['city'] ?></td>
		<td><?php echo $product['address']['state'] ?></td>
		<td><?php
		foreach($product['hobbies'] as $hobby){
			echo $hobby ."<br>";
		}
		?>
		</td>
		<td><?php echo $product['isEmployed'] ?></td>
		<td><?php echo $product['salary'] ?></td>
		<td><?php echo $product['contactInfo']['email'] ?></td>
		<td><?php echo $product['contactInfo']['phone'] ?></td>

	</tr>
</table>
</body>
</html>

