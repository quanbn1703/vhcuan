<?php
$conn_string="host=ec2-52-0-155-79.compute-1.amazonaws.com port=5432 dbname=d1qbqmupe48at8 user=jmppooxkorxvyy password=208514a9b53882b78c2e7db3393237d2b9686b346a915de93725714e0b560f2f";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE username='".$username."' AND pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
