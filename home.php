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
	<link href="https://fonts.googleapis.com/css?family=Exo+2|Grand+Hotel|Libre+Franklin|Sacramento" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<style>
	body{
	      background-color:#EFF8FB;
	    }


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
	    background-color: white;
	    text-align: center;
	}
	th{
		color: grey;
	}
	img{
		width: 120px;
	}

	h1{
		color: black;
		padding: 40px;

	}
</style>
</head> 
<nav class="navbar navbar-expand-md bg-info navbar-dark">
      <a class="navbar-brand name" href="media.html" >
        <h1>the Big Library</h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bücher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Filme</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Musik</a>
          </li>  
        </ul>
        
        <form class="  navbar-form navbar-right">
          <div class="input-group">
          
            <div class="nav-item dropdown">
              <button href="#" class=" btn dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategorien</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Bücher</a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li><a class="dropdown-item" href="#">Musik</a></li>
                </ul>
            </div>    
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default btn-warning" type="submit">submit</button>
            </div>
          </div>
        </form>
      </div>  
    </nav>

	<body> 
		<div class="container">
			<div class="row">
			
					
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

			$sql = "SELECT image, cd_id, title, ISBN_code, artist, standing FROM CD LEFT JOIN Media_status ON CD.fk_status_id = Media_status.status_id";
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
						    <th> Status</th>
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
						    <td>". $row["standing"] ."</td>
						  	</tr>
					";
			    } 
			echo "</table>";

				// Free result set
				mysqli_free_result($result);
				// Close connection
				mysqli_close($tabelle);
			?> 
			</div>
		
		</div>
	</body> 
</html>