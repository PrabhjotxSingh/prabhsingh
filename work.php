
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<script src="js/main.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
<link rel="manifest" href="img/fav/site.webmanifest">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="frontend, design, student">
<meta name="description" content="Let's talk about work.">
<meta name="author" content="Prabhjot Singh">
<title>WORK - PRABHSINGH</title>

</head>
<body>
<div id="load_screen"><div id="loading"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>

<div class="navicon">
  <div class="navlines"></div>
  <div class="navlines"></div>
  <div class="navlines"></div>
</div>
<div class="fullnav">
  <div class="closenavicon">
  </div>
  <nav id="nav">
    <a href="index.html">
      <span>HOME</span>
      <img src="img/back.png" />
    </a>
  <a href="about.html">
    <span>ABOUT</span>
    <img src="img/about.jpg" />
  </a>
  <a href="contact.html">
    <span>CONTACT</span>
    <img src="img/contact.jpg" />
  </a>
</nav>
</div>

<br /><br /><br />

<div class="work_page">

  <h1 class="bold homepage_lh dynamic_heading">EDUCATION</h1>
  <hr>
  <h2 class="bold homepage_lh">University of Cincinnati</h2>
  <span class="light">Bachelor of Science in Computer Science</span>
  <br />
  <span class="light"><b>GPA:</b> 3.6&nbsp;&nbsp;&nbsp;<b>CLASS OF:</b> 2025</span>

  <br /><br />

  <h1 class="bold homepage_lh dynamic_heading">CURRENT EXPERIENCE</h1>
  <hr>
  <h2 class="bold homepage_lh">Developer</h2>
  <h3 class="bold homepage_lh">London Computer Systems</h3>
  <span class="light">•Develop a ticketing tool using C# and Angular</span>
  <br />
  <span class="light">•Test complex web applications</span>

  <br /><br />

  <h2 class="bold homepage_lh">Teaching Assistant</h2>
  <h3 class="bold homepage_lh">University of Cincinnati</h3>
  <span class="light">•Provide assistance to students and deliver content</span>
  <br />
  <span class="light">•Grade large quantities of homework, exams, and projects</span>

  <br /><br />

  <a target="_blank" href="resume-singh.pdf" class="link">SEE MORE ➔</i></a>

  <br /><br />

  <h1 class="bold homepage_lh dynamic_heading">PROJECTS</h1>
  <hr>
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
    <div class='worktile' id='show".$v[0]."'><div class='worktile_center'>".$name{$v[0]}." ➔</div></div>
  ";
  }
  ?>
  <!--End of show work-->


<br /><br /><br /><br />
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
    <a id='close".$v[0]."' class='linkb'>CLOSE</a>
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
