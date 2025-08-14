<?php
$json= file_get_contents('demo3.json');
$Consignment= json_decode($json, true);




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consignment List</title>
</head>
<body>
	<?php
		foreach($Consignment['ConsignmentList'] as  $const ) {
			echo "<pre>";
			print_r($const);
			echo "IsConsolidate:-" . $const['IsConsolidate']."<br>";
			echo "IsDangerousGoods:-" . $const['IsDangerousGoods']."<br>";
			echo "ReceiverName:-" . $const['ReceiverDetails']['ReceiverName']."<br>";
			echo "AddressLine1:-" . $const['ReceiverDetails']['AddressLine1']."<br>";
			echo "AddressLine2:-" . $const['ReceiverDetails']['AddressLine2']."<br>";
			echo "Suburb:-" . $const['ReceiverDetails']['Suburb']."<br>";
			echo "State:-" . $const['ReceiverDetails']['State']."<br>";
			echo "Postcode:-" . $const['ReceiverDetails']['Postcode']."<br>";
			echo "DeliveryInstructions:-" . $const['ReceiverDetails']['DeliveryInstructions']."<br>";
			echo "ReceiverContactName:-" . $const['ReceiverDetails']['ReceiverContactName']."<br>";
			echo "receivercontactmobile:-" . $const['ReceiverDetails']['receivercontactmobile']."<br>";
			echo "receivercontactemail:-" . $const['ReceiverDetails']['receivercontactemail']."<br>";
			echo "IsAuthorityToLeave:-" . $const['ReceiverDetails']['IsAuthorityToLeave']."<br>";
			echo "CustomerReference:-" . $const['CustomerReference']."<br>";
			foreach ($const['ConsignmentLineItems'] as $item) {
				echo "SenderLineReference:-" . $item['SenderLineReference']."<br>";
				echo "RateType:-" . $item['RateType']."<br>";
				echo "Items:-" . $item['Items']."<br>";
				echo "PackageDescription:-" . $item['PackageDescription']."<br>";
				echo "Kgs:-" . $item['Kgs']."<br>";
				echo "Length:-" . $item['Length']."<br>";
				echo "Width:-" . $item['Width']."<br>";
				echo "Height:-" . $item['Height']."<br>";
				echo "qty:-" . $item['Height']."<br>";
				echo "Cubic:-" . $item['Height']."<br>";					
			}
			
			echo "ConnoteDate:-" . $const['ConnoteDate']."<br>";
		}
	?>		
	 
</body>
</html>