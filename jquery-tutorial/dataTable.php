<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "datastorage";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");

$offset = $_GET["offset"];
$limit = $_GET["limit"];
$order = $_GET["order"];
$search = @$_GET["search"];
$init = $_GET["init"];

if($init == "1"){
  $sql = "SELECT * FROM runners LIMIT $offset,$limit";
  $result = $conn->query($sql);
}elseif($init == "2"){
  $sql = "SELECT * FROM runners WHERE firstName LIKE '%$search%' OR lastName LIKE '%$search%' LIMIT $limit,$offset";
  $result = $conn->query($sql);
}

$sqlAll = "SELECT COUNT(*) as countAll FROM runners";
$resultAll = $conn->query($sqlAll);

while ($rowAll = $resultAll->fetch_assoc()) {
  $dataAll = $rowAll["countAll"];
}

$arrData = array();
$arrRows = array();
$arrAll = array();

while($row = $result->fetch_assoc()) {
  $arrRows["id"] = $row["id"];
  $arrRows["firstName"] = $row["firstName"];
  $arrRows["lastName"] = $row["lastName"];
  $arrRows["action"] = "<button type='button' class='btn btn-warning'> แก้ไข </button>";

  array_push($arrData, $arrRows);
}

$arrAll["total"] = $dataAll;
$arrAll["rows"] = $arrData;

echo json_encode($arrAll);

$conn->close();

?>
