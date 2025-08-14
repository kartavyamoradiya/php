<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>csv get</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<table class="table table-striped">
		<?php			
		$row = 0; $totalColumn=0; $totalWeight = 0;
		if (($handle = fopen("csv_eroa_sx_1 (2).csv", "r")) !== FALSE) {
			 echo "<thead><tr>"; 
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		       $totalColumn = count($data);       
		        if ($row == 0) {
		        		foreach($data as $key => $value){
		        			//echo "<pre>";
		        				//print_r($value);
		          echo "<th>" . $value ."</th>";
		          		        //echo"<pre>";
		          		        //print_r($totalColumn);		          		        
		    
		      	} echo "</tr>";
		      	echo "<thead>";			 
		       } else{
		       	echo  "<tbody>";
		       		echo "<tr>";
		       		foreach($data as $key => $value){
		        			//echo "<pre>";
		        				//print_r($value);   
		          echo "<td>" . $value ."</td>";
		          		     
		      	}echo "</tr>";
		    
		        }
		       
		        $row++;
		        echo  "</tbody>";
		    }
		    echo "<tfoot>";

		    	for($i = 0; $i < $totalColumn; $i++){
		    		//echo "<pre>";
		    		//print_r($i);
		    		echo "<td>". $i ."</td>"; 
		    	}
		    echo "</tfoot>";
		    fclose($handle);
		}
	?>
	</table>
</body>
</html>