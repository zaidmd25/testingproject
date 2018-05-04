<?php
include("connection.php");

$UID = $_GET['id'];
$query = mysql_query("SELECT * FROM student WHERE id = '$UID'") 
or die(mysql_error());

if(mysql_num_rows($query)>=1){
    while($row = mysql_fetch_array($query)) {
        $name = $row['name'];
        $batch = $row['batch'];
        $address = $row['address'];
    }
?>
<form action="update.php" method="post">
<input type="hidden" name="id" value="<?=$UID;?>">
Address: <input type="text" name="address" value="<?=$address;?>"><br>
Name: <input type="text" name="name" value="<?=$name?>"><br>
Batch: <input type="text" name="batch" value="<?=$batch?>"><br>
<input type="Submit" name="submit">
</form>
<?php
}else{
    echo 'No entry found. ';
}
?>
