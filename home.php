<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: indexLogin.php");
		exit;
	}
	// select logged-in users detail
	$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<html> 
<head> 
<title>Media List</title> 
<style>
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	    width: 20%;
	}

	tr:nth-child(even) {

	    background-color: #dddddd;
	}
</style>
</head> 

<body> 
<?php 
$tabelle = new mysqli('localhost','root','', 'cr10_Ying_Qi_biglibrary');

	if (!$tabelle)
	{
	   print "<h1>Unable to Connect to MySQL</h1>";
	}

$sql = "SELECT book_id, title, ISBN_code, published_date FROM Book";
$result = mysqli_query($tabelle, $sql);

    echo "
			<h1>Books</h1>
    		<table>
			  <tr>
			    <th>book_id</th>
			    <th>Title</th>
			    <th>published_date</th>
			    <th>ISBN_code</th>
			    <th>Status</th>
			  </tr>";
	
while($row = mysqli_fetch_assoc($result)) {

	echo     "<tr>
			    <td>". $row["book_id"] ."</td>
			    <td>". $row["title"] ."</td>
			 	<td>". $row["published_date"]." </td>
			    <td>". $row["ISBN_code"] ."</td>
			  	</tr>
		";
    } 
echo "</table>";

	// Free result set
	mysqli_free_result($result);
	// Close connection
	mysqli_close($tabelle);
?> 

<?php 
$tabelle = new mysqli('localhost','root','', 'cr10_Ying_Qi_biglibrary');

	if (!$tabelle)
	{
	   print "<h1>Unable to Connect to MySQL</h1>";
	}

$sql = "SELECT dvd_id, title, ISBN_code, actor FROM DVD";
$result = mysqli_query($tabelle, $sql);

    echo "
			<h1>DVD</h1>
    		<table>
			  <tr>
			    <th>DVD_id</th>
			    <th>Title</th>
			    <th>Actor</th>
			    <th>ISBN_code</th>
			    <th>Status</th>
			  </tr>";
	
while($row = mysqli_fetch_assoc($result)) {

	echo     "<tr>
			    <td>". $row["dvd_id"] ."</td>
			    <td>". $row["title"] ."</td>
			    <td>". $row["actor"]." </td>
			    <td>". $row["ISBN_code"] ."</td>
			  	</tr>
		";
    } 
echo "</table>";

	// Free result set
	mysqli_free_result($result);
	// Close connection
	mysqli_close($tabelle);
?> 

<?php 
$tabelle = new mysqli('localhost','root','', 'cr10_Ying_Qi_biglibrary');

	if (!$tabelle)
	{
	   print "<h1>Unable to Connect to MySQL</h1>";
	}

$sql = "SELECT dvd_id, title, ISBN_code, artist FROM CD";
$result = mysqli_query($tabelle, $sql);

    echo "
			<h1>CD</h1>
    		<table>
			  <tr>
			    <th>CD_id</th>
			    <th>Title</th>
			    <th>Artist</th>
			    <th>ISBN_code</th>
			    <th>Status</th>
			  </tr>";
	
while($row = mysqli_fetch_assoc($result)) {

	echo     "<tr>
			    <td>". $row["cd_id"] ."</td>
			    <td>". $row["title"] ."</td>
			    <td>". $row["artist"]." </td>
			    <td>". $row["ISBN_code"] ."</td>
			  	</tr>
		";
    } 
echo "</table>";

	// Free result set
	mysqli_free_result($result);
	// Close connection
	mysqli_close($tabelle);
?> 
</body> 
</html>

<?php ob_end_flush(); ?>