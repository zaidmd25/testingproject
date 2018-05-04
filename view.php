<html>
<head>
<title>View Records</title>
</head>
<body>
<?php
include('connection.php');
$result = mysql_query("SELECT * FROM student")

or die(mysql_error());

//echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>Name</th> <th>Batch</th> <th>Address</th></tr>";

while($res = mysql_fetch_array( $result )) {
echo "<tr>";
echo '<td>' . $res['id'] . '</td>';
echo '<td>' . $res['name'] . '</td>';
echo '<td>' . $res['batch'] . '</td>';
echo '<td>' . $res['address'] . '</td>';
echo '<td><a href="delete.php?id='.$res['id'].'">Delete</a></td>';
echo '<td><a href="edit.php?id=' .$res['id'].'">Edit</a></td>';        
echo "</tr>";
}
echo "</table>";
?>
<p><a href="index.php">Add</a></p>
</body>
</html>