<?php
    include("connection.php");

    $ud_ID = $_POST["id"];

    $name = mysql_real_escape_string($_POST["name"]);
    $batch = mysql_real_escape_string($_POST["batch"]);
    $address = mysql_real_escape_string($_POST["address"]);
    $query="UPDATE student
            SET  name = '$name', batch = '$batch' , address = '$address'
            WHERE id='$ud_ID'";
mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
    echo "<p>($ud_ID) Record Updated<p>";
}else{
    echo "<p>($ud_ID) Not Updated<p>";
}
?>
