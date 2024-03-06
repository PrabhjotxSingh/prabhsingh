<!DOCTYPE html>
<html>
<head>
<!--
 _____   _____        ___   _____   _   _        _____   _   __   _   _____   _   _
|  _  \ |  _  \      /   | |  _  \ | | | |      /  ___/ | | |  \ | | /  ___| | | | |
| |_| | | |_| |     / /| | | |_| | | |_| |      | |___  | | |   \| | | |     | |_| |
|  ___/ |  _  /    / / | | |  _  { |  _  |      \___  \ | | | |\   | | |  _  |  _  |
| |     | | \ \   / /  | | | |_| | | | | |       ___| | | | | | \  | | |_| | | | | |
|_|     |_|  \_\ /_/   |_| |_____/ |_| |_|      /_____/ |_| |_|  \_| \_____/ |_| |_|
Why are you even looking at this?
Instagram: @Prabh5487
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" type="image/x-icon" href="img/fav.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="west, lakotawest, saab">
<meta name="description" content="The speakers that have visted Saab.">
<meta name="author" content="Prabhjot Singh">
<title>Speakers - Saab - Lakota West</title>

</head>
<body style="background-color: #1a1a1a; color: white;">
  <div id="load_screen"><div id="loading"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>

  <div class="menubar">
    <a href="index.html" class="links">HOME</a>
  </div>

<div class="speakertextcontain">
<div class="speakertextcenter">
  <h2>Lakota West - Saab</h2>
  <h1 class="speakersintrotext">Speakers</h1>
</div>
</div>

<div class="speakermostrecenttext" style="background-image: url('<?php echo file_get_contents("https://pastebin.com/raw/5kW57Cz5"); ?>');">
  <div class="speakermostrecenttextcenter">
    <h2>Recommended</h2>
    <h1><?php echo file_get_contents("https://pastebin.com/raw/jVKbLQiQ"); ?></h1>
    <h3><?php echo file_get_contents("https://pastebin.com/raw/BmDVViFk"); ?></h3>
	<a href="<?php echo file_get_contents('https://pastebin.com/raw/vzCGFqWx'); ?>" class="btnroll rollover">
    <span class="roll-text">View</span>
    <span class="roll-text">Go!</span>
    </a>
  </div>
</div>


<center>
  <div class="containerallspeakers">
  <br />
  <h1 style="color: #1a1a1a;">-</h1>
  <h1>Speakers</h1>
  
  <!-- Show speakers -->
  <?php
  
  $dir = 'data/allspeakers/*';

  foreach(glob($dir) as $mp3)
  {
    $k = pathinfo($mp3);
    $m = $k['basename'];
    $v = explode(".",$k['basename']);
    $lastname[$v[0]] = file_get_contents("data/allspeakers/".$v[0]."/last.txt");
    $firstname[$v[0]] = file_get_contents("data/allspeakers/".$v[0]."/first.txt");
	  echo "
    <a class='spboxlink' href='data/allspeakers/".$v[0]."/main.php'>
    <div style=\"background-image: url('data/allspeakers/".$v[0]."/thumb.jpg')\" class='spbox'> ".$firstname[$v[0]]." <br /> ".$lastname[$v[0]]." </div>
    </a>
    ";
  }
  ?>
  <!--End of show speakers-->
  <br /><br /><br />
</div>
</center>



<script src="js/main.js"></script>

</body>
</html>
