<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Information</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="getdata">
		<div class='container'>
			<table class="table table-bordered">
			<button class='btn mb-3'><a href='filter.php'>Search</a></button>
				<?php	
				$row = 0;
				if (($handle = fopen("csv.csv", "r")) !== FALSE) {
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
						if ($row == 0) {
							echo "<thead><tr>";
							foreach ($data as $key => $value) {
								//echo "<pre>";
								//print_r($value);
								echo "<th>" . $value . "</th>";
							}
							echo "</tr>";
							echo "</thead>";
						} else {
							echo  "<tbody>";
							echo "<tr>";
							foreach ($data as $key => $value) {
								echo "<td>" . $value . "</td>";
							}
							echo "</tr>";
						}

						$row++;
						echo  "</tbody>";
					}
				}
				header("refresh:3;url=index.php");
				exit();
				?>
			</table>
		</div>
	</div>
</body>

</html>