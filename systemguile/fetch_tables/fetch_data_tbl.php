<?php
require_once('../connection/db_connection.php');

$sql = "SELECT * FROM data_tbl";
$result = $conn->query($sql);

?>