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
	    border: 1px solid black;
	    text-align: left;
	    padding: 8px;
	    width: 20%;
	}

	tr:nth-child(even) {

	    background-color: #dddddd;
	}

	img{
		width: 120px;
	}

	h1{
		color: blue;
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

$sql = "SELECT image, book_id, title, ISBN_code, published_date FROM Book";
$result = mysqli_query($tabelle, $sql);

    echo "
			<h1>Books</h1>
    		<table>
			  <tr>
			  	<th>Image</th>
			    <th>book_id</th>
			    <th>Title</th>
			    <th>published_date</th>
			    <th>ISBN_code</th>
			    <th>Status</th>
			  </tr>";
	
while($row = mysqli_fetch_assoc($result)) {

	echo     "<tr>
				<td>
					<img src='". $row["image"] ."'>
				</td>	
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

$sql = "SELECT image, dvd_id, title, ISBN_code, actor FROM DVD";
$result = mysqli_query($tabelle, $sql);

    echo "
			<h1>DVD</h1>
    		<table>
			  <tr>
			  	<th>Image</th>
			    <th>DVD_id</th>
			    <th>Title</th>
			    <th>Actor</th>
			    <th>ISBN_code</th>
			    <th>Status</th>
			  </tr>";
	
while($row = mysqli_fetch_assoc($result)) {

	echo     "<tr>
				<td>
					<img src='". $row["image"] ."'>
				</td>
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

$sql = "SELECT image, cd_id, title, ISBN_code, artist FROM CD";
$result = mysqli_query($tabelle, $sql);

    echo "
			<h1>CD</h1>
    		<table>
			  <tr>
				<th>Image</th>
			    <th>CD_id</th>
			    <th>Title</th>
			    <th>Artist</th>
			    <th>ISBN_code</th>
			    <th>Status</th>
			  </tr>";
	
while($row = mysqli_fetch_assoc($result)) {

	echo     "<tr>
				<td>
					<img src='". $row["image"] ."'>
				</td>
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