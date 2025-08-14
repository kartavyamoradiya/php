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
//$file = fopen("csv_eroa_sx_1 (2).csv","r");
//echo "<pre>";
//print_r(fgetcsv($file));
$index = 0; $totalColumn = 0; $totalLength = 0; $totalWidth = 0; $totalHeight = 0; $totalWeight = 0;
if (($handle = fopen("csv_eroa_sx_1 (2).csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		//echo"<pre>";
		//print_r($data)."<br>";
    	$totalColumn = count($data);
		//echo "<pre>";
		//printf($totalColumn);
    	if ($index) : //echo "<pre>"; print_r($index);?>
    		<?php if ($index == 1) :?>
    			<tbody>
    		<?php endif; ?>
		    	<tr class="<?= $index % 2 == 0 ? 'even' : 'odd';?>">
		    	<?php foreach ($data as $key => $value) : //echo "<Pre>"; print_r($value);?>
		    		<?php if ($key == 10)  { $totalLength = $totalLength + $value; } ?>
		    		<?php if ($key == 11)  { $totalWidth = $totalWidth + $value; } ?>
		    		<?php if ($key == 12)  { $totalHeight = $totalHeight + $value; } ?>
		    		<?php if ($key == 15)  { $totalWeight = $totalWeight + $value; } ?>
		    		<td><?= $value ?></td>
		    	<?php endforeach; ?>
		    	</tr>
	    <?php else : ?>
	    	<thead>
	    	<tr>
	    		<?php foreach ($data as $key => $value) :?>
	    			<th><?= $value ?></th>
	    		<?php endforeach; ?>
	    	</tr>
	    	</thead>
	    <?php endif; ?>
    	<?php $index++; ?>
    <?php } ?>
    </tbody>
    <tfoot>
    	<?php for($i = 0; $i < $totalColumn; $i++) : //echo "<pre>"; print_r($i);  ?>
    		<?php if ($i == 10) : ?>
    			<td><?= $totalLength ?></td>
    		<?php elseif ($i == 11) : ?>
    			<td><?= $totalWidth ?></td>
			<?php elseif ($i == 12) : ?>
    			<td><?= $totalHeight ?></td>
			<?php elseif ($i == 15) : ?>
    			<td><?= $totalWeight ."CRI" ?></td>
    		<?php else : ?>
    			<td>-</td>
    		<?php endif; ?>
    	<?php endfor; ?>
    </tfoot>
    <?php fclose($handle);
}
?>
</table>
</body>
</html>