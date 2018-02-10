<!DOCTYPE html>
<html lang="en">
  <head>
    <title>M-Bibliothek</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Exo+2|Grand+Hotel|Libre+Franklin|Sacramento" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  </head>

  <body>
<!-- **********      ******** Navi ********      **********-->
    <nav class="navbar navbar-expand-md bg-info navbar-dark">
      <a class="navbar-brand name" href="media.html" >
        <h1>Ying's Mediathek</h1>
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

<!-- *****   Bücher (siehe unter "myscript.js" // ich kann nicht verlinken deswegen ist JavaScript hier)   *****-->
    <div class="container">
      <div class="row"> 
      <div class="col col-md-12 col-sm-12 colhead"><h1 id="BOOKHEAD">DVD</h1>
      </div>
    </div>
    <?php 
    $tabelle = new mysqli('localhost','root','', 'cr10_Ying_Qi_biglibrary');

      if (!$tabelle)
      {
         print "<h1>Unable to Connect to MySQL</h1>";
      }

    $sql = "SELECT dvd_id, title, ISBN_code, published_date FROM DVD";
    $result = mysqli_query($tabelle, $sql);

    echo "<div class='row'>";

    echo "</div>";
       
    while($row = mysqli_fetch_assoc($result)) {

        echo   "<div class='columsDvd col-md-4 col-sm-12'>
                  <div class='pic'>
                    <img class='imgBooks rounded' src='" . $row["book_id"]" '> 
                  </div>

                  <div class='details my-3 bg-light outline-dark'>
                    DVD-ID: ". $row["dvd_id"] . " <br>
                    Title: ". $row["title"] . " <br>
                    Genre: ". $row["genre"] . "  <br>
                    Publisher: ". $row["publisher"] . " <br>
                  </div>

                  <div class='ratandstars'><div class='rating'><button id='add' class='btnrating' value=''>Status:</button>' 
                  </div>
                  <div> ". $row["status"] . " </div>";

                }

  echo "</div>";
  echo "</div>";

  // Free result set
  mysqli_free_result($result);
  // Close connection
  mysqli_close($tabelle);

    ?> 
    

 
<!-- **********      ******** Footer ********      **********-->    
    <footer class="bg-info">
      
      <center>copyright by Ying Qi 2018</center>
      
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>


