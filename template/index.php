<?php
require "session.php";
//place title of page between
?>

<html>
<head>
<title>Registration</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="homepagecontainer">
<h1 class="homepagetitle">Taffy Kingdom</h1>
<?php
require "navigation.php";
?>
</head>

<body>
<div class="homepagecontainer">
<table style="background-color:lightgray;">
<tr>
<td style="padding-left:20px; padding-right:20px; padding-top:20px; padding-bottom:20px; width:33.3%;">
<p>
Welcome,<br><br> 
this is a project that will mostly revolve around EO content for the time being. Our goal is to make EO more fun by providing an accurate artist time,
 and giving new players the opportunity to discover the game by providing an easy download link and guides that give them fundamental knowledge. We are hoping this will eventually evolve into creating our own game/games. <br><br>We appreciate your support!
</p>
</td>
<td style="padding-left:20px; padding-right:20px; padding-top:20px; padding-bottom:20px; width:33.3%; float:right;">
<img src="little_palm.png" alt="Taffy STAYZ litt">
</td>
<td style="width:33.3%;">

<?php
include 'login.php';
?>
</td>
</tr>
</table>

</body>
<?php
require "footer.php";
?>