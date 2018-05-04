<?php
include("connection.php");
 
$id = $_GET['id'];

echo "Id is : $id";
 
$sql = "DELETE FROM `form_case`.`student` WHERE `student`.`id` = $id";

$val = mysql_query($sql);

if ($val) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysql_error($conn);
}
?>
<html>
    <body>
    <form>
    <td><input type="button" value="Go back!" onclick="history.back()"></td>
    </form>
    </body>
</html>
