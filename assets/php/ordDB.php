<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once 'dbconfig.php'; 
//$stmt = $db_con->prepare("SELECT ordid, english, wordtype, definition, swedish FROM ords ORDER BY english"); 	
$stmt = $db_con->prepare("SELECT english, wordtype, definition, swedish FROM ords ORDER BY english"); 	

$stmt->execute();    
//while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ echo $row['definition'];} ;


$outp = "";
$data = array();
while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
//    $outp .= '{"ID":"'  . $row["ordid"] . '",';
    $outp .= '{"English":"'  . $row["english"] . '",';
    $outp .= '"Wordtype":"'   . $row["wordtype"] . '",';
    $outp .= '"Definition":"'   . $row["definition"] . '",';
    $outp .= '"Swedish":"'   . $row["swedish"] . '",';
    
    $data[] = $row;

}
$outp ='{"records":['.$outp.']}';
//$conn->close();

//echo($outp);
//print json_encode($outp);
echo json_encode($data);
?>