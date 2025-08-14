<?php
$json = file_get_contents('demo3.json');
$Consignment = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consignment List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-4">
    <h1 class="text-center">Consignment List</h1>
    
    <?php
    foreach ($Consignment['ConsignmentList'] as $const) {

      echo "<div class='card col-md-12'>";
      echo "<div class='card-body'>";
      echo "<h5 class='card-title text-center'>Consignment Details</h5>";

      echo "<p><strong>Is Consolidate:</strong> " . $const['IsConsolidate'] . "</p>";
      echo "<p><strong>Is Dangerous Goods:</strong> " . $const['IsDangerousGoods'] . "</p>";
      echo "<p><strong>ConsignmentId:</strong> " . $const['ConsignmentId'] . "</p>";
      
      echo "<h5 class='card-title mb-4'>Receiver Details</h5>";
      echo "<table class='table table-bordered'>";
      echo "<tr><th>Receiver Name</th><td>" . $const['ReceiverDetails']['ReceiverName'] . "</td></tr>";
      echo "<tr><th>Address Line 1</th><td>" . $const['ReceiverDetails']['AddressLine1'] . "</td></tr>";
      echo "<tr><th>Address Line 2</th><td>" . $const['ReceiverDetails']['AddressLine2'] . "</td></tr>";
      echo "<tr><th>Suburb</th><td>" . $const['ReceiverDetails']['Suburb'] . "</td></tr>";
      echo "<tr><th>State</th><td>" . $const['ReceiverDetails']['State'] . "</td></tr>";
      echo "<tr><th>Postcode</th><td>" . $const['ReceiverDetails']['Postcode'] . "</td></tr>";
      echo "<tr><th>Delivery Instructions</th><td>" . $const['ReceiverDetails']['DeliveryInstructions'] . "</td></tr>";
      echo "<tr><th>Receiver Contact Name</th><td>" . $const['ReceiverDetails']['ReceiverContactName'] . "</td></tr>";
      echo "<tr><th>Receiver Contact Mobile</th><td>" . $const['ReceiverDetails']['receivercontactmobile'] . "</td></tr>";
      echo "<tr><th>Receiver Contact Email</th><td>" . $const['ReceiverDetails']['receivercontactemail'] . "</td></tr>";
      echo "<tr><th>Is Authority To Leave</th><td>" . $const['ReceiverDetails']['IsAuthorityToLeave'] . "</td></tr>";
      echo "</table>";

      echo "<h5 class='card-title '>Consignment Line Items</h5>";
      echo "<table class='table table-striped'>";
      echo "<thead>
      <tr>
      <th>Sender Line Reference</th>
      <th>Rate Type</th>
      <th>Items</th>
      <th>Package Description</th>
      <th>Kgs</th>
      <th>Length</th>
      <th>Width</th>
      <th>Height</th>
      <th>Qty</th>
      <th>Cubic</th>
      </tr>
      </thead>";
      echo "<tbody>";
      foreach ($const['ConsignmentLineItems'] as $item) {
        echo "<tr>";
        echo "<td>" . $item['SenderLineReference'] . "</td>";
        echo "<td>" . $item['RateType'] . "</td>";
        echo "<td>" . $item['Items'] . "</td>";
        echo "<td>" . $item['PackageDescription'] . "</td>";
        echo "<td>" . $item['Kgs'] . "</td>";
        echo "<td>" . $item['Length'] . "</td>";
        echo "<td>" . $item['Width'] . "</td>";
        echo "<td>" . $item['Height'] . "</td>";
        echo "<td>" . $item['qty'] . "</td>";
        echo "<td>" . $item['Cubic'] . "</td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
      echo "<p><strong>Connote Date:</strong> " . date('Y-m-d') . "</p>";
      echo "</div>";
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>
