
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../css/style.css">

<link rel="apple-touch-icon" sizes="180x180" href="../../img/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../img/fav/favicon-16x16.png">
<link rel="manifest" href="../../img/fav/site.webmanifest">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Prabhjot Singh">
<title>READ - <?php echo file_get_contents("name.txt"); ?> - PRABHSINGH</title>

</head>
<body>
<div id="load_screen"><div id="loading"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>

<div class="page">
  <a href="../../work.php" class="link">BACK</a>
  <br />
  <br />
  <h1><?php echo file_get_contents("name.txt"); ?></h1>
  <?php echo file_get_contents("about.txt"); ?>
  <br />
  <br />
  <a target="_blank" href="view/" class="btn">View the project  <i class="fa fa-external-link fa-1x" aria-hidden="true"></i></a>
  <br />
  <br />
  <br />
</div>

<script src="../../js/main.js"></script>
</body>

</html>
