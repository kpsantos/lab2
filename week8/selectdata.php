<!DOCTYPE html>
<html>

<link rel="stylesheet" href="website.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--open sans font-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto&display=swap" rel="stylesheet">
<!--logo font-->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">



<head>
	<title>shortscouture!</title>
	<link rel="icon" type="image/xicon" href="images/chitoge.ico">
</head>

<body class = "bg">
<?php
?>

 
  <!--navbar-->
  <nav class ="basta">
    <a class="logo">shortscouture</a>
      <div class="navbar">
          <a href="index.php">Home</a>
          <a onclick="darkMode()">Test</a>
          <a href="#">Misc</a>
      </div>
  </nav>
  <!--html structure-->
  <main>
    <div class="welcome-container">
    <header class="welcome-text">PHP Entry</header>
    </div>
    <div class="article">
      <div class="aboutme">
        <section class="aboutme1">
        <?php
$servername = "localhost";
$username = "webprogmi222_sf221";
$password = "xE*Y2nleNVvZm[!!";
$dbname = "webprogmi222_sf221";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

 $sql = "SELECT * FROM kpsantos_myguests";
 $result = $conn -> query($sql);

if ($result->num_rows > 0){
    //output data each row
    while($row = $result -> fetch_assoc()) {
        echo "id: ". $row["id"]. " - Name: ". $row["name"]. " - Email: ". $row["email"]. " - Website: ". $row["website"]. " - Comment: ". $row["comment"]. " - Gender: ". $row["gender"]. "<br>";
    }
}   else {
    echo "0 results";
}
 $conn->close();
?>
        </section>

        
    <div class = "flexboxlink">
      <p class="imagecontainer">
        <a href="https://www.youtube.com/channel/UCH2a-iczGPi3FUlCG3pVD4A">
          <img src="images/youtube.svg">
        </a> 
      </p>
      <p class = "imagecontainer">
        <a href="https://www.linkedin.com/in/kyle-santos-5550b3249/">
          <img src="images/linkedin.svg">
        </a>
      </p>
      <p class="imagecontainer">
        <a href="https://www.last.fm/user/chanji1"><img src="images/lastfm.svg">
        </a>
      </p>
      <p class="imagecontainer">
        <a href="https://open.spotify.com/user/9npvet1shp7a8u0ekq5zzl30g"><img src="images/spotify.svg">
        </a>
      </p>
    </div>

    <script src="scripting.js"></script>
</body>

</html>
