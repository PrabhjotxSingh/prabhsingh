
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
<link rel="manifest" href="img/fav/site.webmanifest">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="frontend, design, student">
<meta name="description" content="Check out my work.">
<meta name="author" content="Prabhjot Singh">
<title>WORK-PRABHSINGH</title>

</head>
<body>
<div id="load_screen"><div id="loading"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>

<style type="text/css">
body{
  background-image: url('img/flow.png');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
</style>

<div class="page-work">
  <a href="index.html" class="link">BACK</a>

  <br />
  <br />
  <h1>MY WORK</h1>

  <!-- Show WORK -->
  <?php

  $dir = 'work/*';

  foreach(glob($dir) as $work)
  {
  $k = pathinfo($work);
  $v = explode(".",$k['basename']);
  $name{$v[0]} = file_get_contents("work/".$v[0]."/name.txt");
  $image{$v[0]} = 'work/'.$v[0].'/screenshot.png';

  echo "
  <style type='text/css'>
  .".$v[0]."{
    display: none;
  }
  </style>
  ";

  echo "
    <div class='worktile' id='show".$v[0]."' style='background-image: url(\"".$image{$v[0]}."\");'><div class='worktile_center'>".$name{$v[0]}."</div></div>
  ";
  }
  ?>
  <!--End of show work-->
  <br /><br />
  <!--
  <a href="#missing" class="menuboxbtn">Why are so many missing?</i></a>
  -->

  <h1>IMPORTANT LINKS</h1>
  <a target="_blank" href="resume-singh.pdf" class="menuboxbtn">View my resume  <i class="fa fa-external-link fa-1x" aria-hidden="true"></i></a>
  <div class="mobile_element">
  <br />
  </div>
  <a target="_blank" href="https://www.linkedin.com/in/prabhjot-singh-3ab84b161/" class="menuboxbtn">Check out my Linkedin  <i class="fa fa-external-link fa-1x" aria-hidden="true"></i></a>
  <div class="mobile_element">
  <br />
  </div>
  <a target="_blank" href="https://github.com/PrabhjotxSingh" class="menuboxbtn">Visit my GitHub  <i class="fa fa-external-link fa-1x" aria-hidden="true"></i></a>

  <br />
  <br />
  <br />

</div>

<!-- Popup fe -->
<?php
$dir = 'work/*';
foreach(glob($dir) as $popup)
{
    $k = pathinfo($popup);
    $v = explode(".",$k['basename']);

	echo "

  <div class='".$v[0]."'>
    <div class='overlay-alert'></div>
    <div class='alert snormal afade-aslide'>
    <a id='close".$v[0]."' class='linkblack'>CLOSE</a>
    <h2>".$name{$v[0]}."</h2>
    <a href='work/".$v[0]."/' class='menuboxbtnpop'>Read about it  <i class='fa fa-external-link fa-1x' aria-hidden='true'></i></a>
    <div class='mobile_element'>
    <br />
    </div>
    <a target='_blank' href='work/".$v[0]."/view/' class='menuboxbtnpop'>View the project  <i class='fa fa-external-link fa-1x' aria-hidden='true'></i></a>
    </div>
  </div>
  </div>

  ";
}
?>
<!-- popup fe END-->

<script src="js/main.js"></script>

<!-- Popup js -->
<?php
$dir = 'work/*';
foreach(glob($dir) as $popup)
{
    $k = pathinfo($popup);
    $v = explode(".",$k['basename']);
	echo '
  <script>
    $(document).ready(function(){
        $("#close'.$v[0].'").click(function(){
            $(".'.$v[0].'").hide();
        });
        $(".overlay-alert").click(function(){
            $(".'.$v[0].'").hide();
        });
        $("#show'.$v[0].'").click(function(){
            $(".'.$v[0].'").show();
        });
    });
    </script>
    ';
}
?>
<!-- popup js END-->


</body>

</html>
