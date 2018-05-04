<?php
include('connection.php');
$sql="INSERT INTO student(id, name, batch, address, email, dob)
VALUES ('$_POST[id]','$_POST[name]','$_POST[batch]','$_POST[address]')";
if (!mysql_query($sql,$conn))
  {
  die('Error: '. mysql_error());
  }
mysql_close($conn);
?>
<html>
    <body>
    <form>
    <td><input type="button" value="Go back!" onclick="history.back()"></td>
    </form>
    </body>
</html>
