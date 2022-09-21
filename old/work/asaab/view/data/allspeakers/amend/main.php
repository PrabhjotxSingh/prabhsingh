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
<link rel="stylesheet" type="text/css" href="../../speakerstyle.css">
<link rel="icon" type="image/x-icon" href="../../../img/fav.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="west, lakotawest, saab">
<meta name="description" content="View a speaker bio.">
<meta name="author" content="Prabhjot Singh">
<meta name="robots" content="noindex">
<title>Speaker Bio - Saab - Lakota West</title>
</head>
<body>

<div class="textareaholderspeak">
  <a class="backspbtn" href="../../../speakers.php">Back</a>
  <br />
  <br />
  <br />
  <img src="thumb.jpg" alt="Image of speaker" width="200px" />
  <br />
  <h2><?php echo file_get_contents("first.txt"); ?> <?php echo file_get_contents("last.txt"); ?></h2>
  <br />
  <h2>Bio</h2>
  <p><?php echo file_get_contents("bio.txt"); ?></p>
  <br />
  <h2>Favorites</h2>
  <p><?php echo file_get_contents("favs.txt"); ?></p>
  <br />
  <h2>Video</h2>
  <iframe class="videoholder" src="<?php echo file_get_contents('video.txt'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <br />
  <br />
  <br />
  <br />
</div>


</body>
</html>
