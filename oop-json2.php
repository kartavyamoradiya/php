<?php
$json = file_get_contents('demo.json'); 
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
		<th>info_title</th>
		<th>info_copyright</th>
		<th>info_more_info</th>
		<th>info_description</th>
		<th>preferences_title</th>
		<th>preferences_saved_msg</th>
		<th>preferences_token</th>
		<th>preferences_mails</th>
		<th>preferences_domain</th>
	</tr>
	<tr class="table">
		<td><?php echo $product['info_title']['message']?></td>
		<td><?php echo $product['info_copyright']['message']?></td>
		<td><?php echo $product['info_more_info']['message']?></td>
		<td><?php echo $product['info_description']['message']?></td>
		<td><?php echo $product['preferences_title']['message']?></td>
		<td><?php echo $product['preferences_saved_msg']['message']?></td>
		<td><?php echo $product['preferences_token']['message']?></td>
		<td><?php echo $product['preferences_mails']['message']?></td>
		<td><?php echo $product['preferences_domain']['message']?></td>
		
	</tr>
</table>
</body>
</html>