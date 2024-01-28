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
 
  <!--navbar-->
  <nav class ="basta">
    <a class="logo">shortscouture</a>
      <div class="navbar">
          <a href="#">Home</a>
          <a href="phpScript.php">PHP Entry Form</a>
          <a href="#">Misc</a>
      </div>
  </nav>
  <!--html structure-->
  <main>
    <div class="welcome-container">
    <header class="welcome-text">Welcome to  userpage!</header>
    </div>
    <div class="article">
      <div class="aboutme">
        
        <section class="aboutme1">
          <h1>About me</h1>
          <p>Hello, My name is Kyle Santos. I am currently a 2nd year student taking BS Computer Science at Asia Pacific College.</p>
        </section>
        <section class="aboutme2">
          <h1>Hobbies and Interests</h1>
          <h2>osu!</h2>
          <p>I play osu! alot. Especially the gamemode osu!mania. In the right, you can see my stats! I mainly play 4 keys, however I can play a bit of 7 keys as well. I have my stats and gameplay in below so if you're interested you can check it out!!</p>
          <div class="osu-sig-container">
            <div id="osu-block">
              <iframe src="https://www.youtube.com/embed/pQBmweObhwQ?si=IpN_b8YiUeXx0_l5"  id="iframe-round" title="Shinbatsu S" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div id="osu-block">
              <object id="osu-sig" data="https://osu-sig.vercel.app/card?user=shorts&mode=mania&lang=en&animation=true&hue=255" type="" class="aboutmebody"></object>
            </div>
          </div>
          </section>
          <section class="aboutme3">
          <h2>Music</h2>
          <p>I love listening to music alot, playing an electric guitar. The genres I play are usually metal and indie. </p>
          <h2>Anime and Manga</h2>
          <p>I like manga and anime alot. Right now I am reading/watching Frieren. Also I am a Chitoge fan ever since Nisekoi came out!</p>
          <div class="ty">
          <!--will add a container for this part soon!-->
          <h1><center>Special Thanks to:</center></h1>
          <a href="https://github.com/KenPrz">Ken Perez</a>
          <a href="https://github.com/codecy2160">Jesse Sunga</a>
          </div>
          </section>
        </section>
      </div>
    </div>
  </main>
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
