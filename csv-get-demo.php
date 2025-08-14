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

        $row = 0;
        $totalColumn = 0;
        $address = 0;
        $company_id = 0;
        if (($handle = fopen("csvcontacts.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $totalColumn = count($data);
                if ($row == 0) {
                    echo "<thead><tr>";
                    foreach ($data as $key => $value) {
                        if($value== 'id'){
                            $totalColumn = $key;
                            $totalColumn = $value;
                        }
                        //echo "<pre>";
                        //print_r($value);
                        if ($key == 7) {
                            echo "<th>gender</th>";
                        }
                        echo "<th>" . $value . "</th>";

                        //echo"<pre>";
                        //print_r($totalColumn);		          		        

                    }
                    echo "</tr>";
                    echo "</thead>";
                } else {
                    echo  "<tbody>";
                    $class = $row % 2 == 0 ? 'even' : 'odd';
                    echo "<tr class='$class'>";
                    foreach ($data as $key => $value) {
                        for ($totalColumn = 0; $totalColumn <= 40; $totalColumn++) {
                            //echo $value;
                        }
                        if ($key == 7) {
                            if ($value == 'mr') {
                                echo "<td>Male</td>";
                            } elseif ($value == 'ms') {
                                echo "<td>Female</td>";
                            } else {
                                echo "<td>-</td>";
                            }
                        }
                        echo "<td>" . $value . "</td>";
                    }
                    
                }
                echo "</tr>";
                echo  "</tbody>";
                $row++;
            }
            echo "<tfoot>";
            for ($i = 0; $i <= $totalColumn; $i++) {
                //echo "<pre>";
                //print_r($i);
                //echo "<td>". $i ."</td>";
                if ($i == 6) {
                    echo "<td>" . $address . "</td>";
                } elseif ($i == 15) {
                    echo "<td>" . $company_id . "</td>";
                } else {
                    echo "<td>" . $i . "</td>";
                }
            }
            echo "</tfoot>";
            fclose($handle);
        }
        ?>
    </table>
</body>

</html>