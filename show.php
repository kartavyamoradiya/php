<?php
include('con.php');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $eventid = $_POST['event_id'];
    $date_id = $_POST['date_id'];
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];
    $conds = [];
    
    if (!empty($eventid)) {
        $conds[] = "e.id = ".($eventid);
    }
    if (!empty($date_id)) {
    $conds[] = "d.date_id = " .($date_id);
    }
    if (!empty($start)) {
        $conds[] = "d.start_date = '" . addslashes($start) . "'";
    }
    if (!empty($end)) {
        $conds[] = "d.end_date = '" . addslashes($end) . "'";
    }
$sql = "SELECT e.*,d.*
                    FROM event_db e
                    INNER JOIN date d ON e.id = d.event_id "
                    . (count($conds) ? " WHERE " . implode(" AND ", $conds) : "");

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Content-Type: application/xml');
    header('Content-Disposition: attachment; filename="form_data.xml"');
    $xml = new DOMDocument('1.0', 'UTF-8');
    $xml->formatOutput = true;
    $root = $xml->createElement('events');
    $xml->appendChild($root);
    while ($row = $result->fetch_assoc()) {
        $evt = $xml->createElement('event');
        $root->appendChild($evt);
        $uid=$xml->createElement("id", $row['id']);
        $evt->appendChild($uid);
        $uname=$xml->createElement("title", $row['title']);
        $evt->appendChild($uname);
        $dates = $xml->createElement('dates');
        $evt->appendChild($dates);
        $date = $xml->createElement('date');
        $dates->appendChild($date);
        $id=$xml->createElement("id", $row['date_id']);
        $date->appendChild($id);
        $title=$xml->createElement("date_title", $row['date_title']);
        $date->appendChild($title);
        $start=$xml->createElement("start_date", $row['start_date']);
        $date->appendChild($start);
        $end=$xml->createElement("end_date", $row['end_date']);
        $date->appendChild($end);
        
    }
}else{
    echo "<h3>No record found</h3>";
}
}
echo $xml->saveXML();
exit;
?>  