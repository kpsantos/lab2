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
            // define variables and set to empty values
                    $nameErr = $emailErr = $genderErr = $websiteErr = "";
                    $name = $email = $gender = $comment = $website = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["name"])) {
                        $nameErr = "Name is required";
                    } else {
                        $name = test_input($_POST["name"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                        }
                    }
                    
                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";
                    } else {
                        $email = test_input($_POST["email"]);
                        // check if e-mail address is well-formed
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                        }
                    }
                        
                    if (empty($_POST["website"])) {
                        $website = "";
                    } else {
                        $website = test_input($_POST["website"]);
                        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                        $websiteErr = "Invalid URL";
                        }
                    }

                    if (empty($_POST["comment"])) {
                        $comment = "";
                    } else {
                        $comment = test_input($_POST["comment"]);
                    }

                    if (empty($_POST["gender"])) {
                        $genderErr = "Gender is required";
                    } else {
                        $gender = test_input($_POST["gender"]);
                    }
                    }

                    function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                    }
                    ?>

                    <h2>PHP Form Validation Example</h2>
                    <p><span class="error">* required field</span></p>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                    Name: <input type="text" name="name" value="<?php echo $name;?>">
                    <span class="error">* <?php echo $nameErr;?></span>
                    <br><br>
                    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                    <span class="error">* <?php echo $emailErr;?></span>
                    <br><br>
                    Website: <input type="text" name="website" value="<?php echo $website;?>">
                    <span class="error"><?php echo $websiteErr;?></span>
                    <br><br>
                    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                    <br><br>
                    Gender:
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
                    <span class="error">* <?php echo $genderErr;?></span>
                    <br><br>
                    <input type="submit" name="submit" value="Submit">  
                    </form>

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

                    $sql = "INSERT INTO kpsantos_myguests (name, email, website, comment, gender)
                            VALUES ('$name', '$email', '$website', '$comment', '$gender')";

                    $sql = "SELECT * FROM kpsantos_myguests";
                    $result = $conn -> query($sql);
                    
                    if ($conn->query($sql) === TRUE) {
                      echo "New record created successfully";
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    
                    echo "<h2>Your Input:</h2>";
                    echo $name;
                    echo "<br>";
                    echo $email;
                    echo "<br>";
                    echo $website;
                    echo "<br>";
                    echo $comment;
                    echo "<br>";
                    echo $gender;
                    echo "<br>";

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
