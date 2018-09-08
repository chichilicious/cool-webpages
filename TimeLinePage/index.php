<?php
$login_url = "./login.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['q']) && $_GET['q'] === hash('md4', date("l"))) {
} else {
header('Location: '.$login_url);
die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">
  <title>Timeline</title>
</head>

<body>

  <h1 class="title">2018 Highlights</h1>
  <h3 class="title">With Unsplash!</h3>

  <div id="color"></div>
  <ul>

    <!-- January -->
    <li class="left">
      <h2>January</h2>
    </li>
    <li class="right">
      <a href="https://imgur.com/RC4EZlT"><img src="https://i.imgur.com/RC4EZlT.jpg" title="source: imgur.com" /></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>
    <li class="left">
      <a href="https://imgur.com/sw2v3Dj"><img src="https://i.imgur.com/sw2v3Dj.jpg" title="source: imgur.com" /></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>

    <!-- February -->
    <li class="left">
      <h2>February</h2>
    </li>
    <div class="zoom">
      <li class="right">
        <a href="https://imgur.com/QkNrOKI"><img src="https://i.imgur.com/QkNrOKI.jpg" title="source: imgur.com" /></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>
    </div>
    <li class="left">
      <a href="https://imgur.com/ecISIUG"><img src="https://i.imgur.com/ecISIUG.jpg" title="source: imgur.com" /></a>
      <p>
        <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</em> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>

    <!-- March -->
    <li class="left">
      <h2>March</h2>
    </li>
    <li class="right">
      <a href="https://imgur.com/mEYkaAe"><img src="https://i.imgur.com/mEYkaAe.jpg" title="source: imgur.com" /></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>
    <div class="zoom">
      <li class="left">
        <a href="https://imgur.com/P61bYwI"><img src="https://i.imgur.com/P61bYwI.jpg" title="source: imgur.com" /></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>
    </div>
    <li class="right">
      <a href="https://imgur.com/RC4EZlT"><img src="https://i.imgur.com/RC4EZlT.jpg" title="source: imgur.com" /></a>
      
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>

    <!-- April-->
    <li class="left">
      <h2>April</h2>
    </li>
    <div class="zoom">
        <li class="right">
          <a href="https://imgur.com/jIGh25u"><img src="https://i.imgur.com/jIGh25u.jpg" title="source: imgur.com" /></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
        </li>
      </div>
    <div class="zoom">
      <li class="left">
        <a href="https://imgur.com/3doJsey"><img src="https://i.imgur.com/3doJsey.jpg" title="source: imgur.com" /></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>
    </div>
    
<!-- May-->
<li class="left">
    <h2>May</h2>
  </li>
  <div class="zoom">
      <li class="right">
        <a href="https://imgur.com/pxud5Uu"><img src="https://i.imgur.com/pxud5Uu.jpg" title="source: imgur.com" /></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>
    </div>

  
  <!-- June-->
<li class="left">
    <h2>June</h2>
  </li>
    <li class="left">
      <a href="https://imgur.com/P61bYwI"><img src="https://i.imgur.com/P61bYwI.jpg" title="source: imgur.com" /></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>

    <!-- July-->
<li class="left">
    <h2>July</h2>
</li>
    <li class="highlight">
      <a href="https://imgur.com/jIGh25u"><img src="https://i.imgur.com/jIGh25u.jpg" title="source: imgur.com" /></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta. </p>
    </li>

 <!-- August-->
 <li class="left">
    <h2>August</h2>
</li>
<div class="zoom">
    <li class="right">
      <a href="https://imgur.com/QkNrOKI"><img src="https://i.imgur.com/QkNrOKI.jpg" title="source: imgur.com" /></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>
  </div>
  
    <!-- Sept-->
 <li class="left">
    <h2>September</h2>
</li>
    <li class="left">
      <a href="https://imgur.com/bC89CN6"><img src="https://i.imgur.com/bC89CN6.jpg" title="source: imgur.com" /></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>

    <!-- Oct,Nov,Dec -->
    <li class="highlight">
      <h2>October</h2>
      <p style="text-align:center;">Lorem ipsum dolor sit amet</p>
    </li>
    <li class="highlight">
      <h2>November</h2>
      <p style="text-align:center;">Lorem ipsum dolor sit amet</p>
    </li>
    <li class="highlight">
      <h2>December</h2>
      <p style="text-align:center;">Lorem ipsum dolor sit amet</p>
    </li>




  </ul>

</body>

</html>