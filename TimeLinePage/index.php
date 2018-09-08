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
      <img src="1.jpg" />
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>
    <li class="left">
      <img src="2.jpg" />
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>

    <!-- February -->
    <li class="left">
      <h2>February</h2>
    </li>
    <div class="zoom">
      <li class="right">
        <img src="3.jpg" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>
    </div>
    <li class="left">
      <img src="4.jpg" />
      <p>
        <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</em> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>

    <!-- March -->
    <li class="left">
      <h2>March</h2>
    </li>
    <li class="right">
      <img src="11.jpg" />
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>
    <div class="zoom">
      <li class="left">
        <img src="6.jpg" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>
    </div>
    <li class="right">
        <img src="7.jpg" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>

    <!-- April-->
    <li class="left">
      <h2>April</h2>
    </li>
    <div class="zoom">
        <li class="right">
          <img src="8.jpg" />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
        </li>
      </div>
    <div class="zoom">
      <li class="left">
        <img src="1.jpg" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>
    </div>
    
<!-- May-->
<li class="left">
    <h2>May</h2>
  </li>
  <div class="zoom">
      <li class="right">
          <img src="9.jpg" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
      </li>
    </div>

  
  <!-- June-->
<li class="left">
    <h2>June</h2>
  </li>
    <li class="left">
      <img src="10.jpg" />
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>

    <!-- July-->
<li class="left">
    <h2>July</h2>
</li>
    <li class="highlight">
      <img src="3.jpg" />
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta. </p>
    </li>

 <!-- August-->
 <li class="left">
    <h2>August</h2>
</li>
<div class="zoom">
    <li class="right">
      <img src="12.jpg" />
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas scelerisque porta.</p>
    </li>
  </div>
  
    <!-- Sept-->
 <li class="left">
    <h2>September</h2>
</li>
    <li class="left">
        <img src="11.jpg" />
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