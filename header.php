<?php
session_start();
?>
	<!DOCTYPE HTML>
		<html>
			<title>Welocme to Daniel's Blog</title>
			<meta name="viewport" content="width=device-width",initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://simple.kenyacardeals.co.ke/css/main.css">

<script src='tinymce/tinymce.min.js'></script>

<body>

<header class="w3-container w3-teal">
<form action="search.php" method ="GET" class="w3-container">
	<input type ="text" name="q" class="w3-input w3-border" placeholder="Search for anything" required>
		<input type="submit" class="w3-btn w3-teal" value="Search">
			</form>
			<a href="index.php" class="w3-bar-item w3-button w3-pale-green">Home</a> 
<?php 
if($_SESSION['username' ]) {
echo "<a href='new.php' class='w3-bar-item w3-btn'>New Post</a>";
echo "<a href='admin.php' class='w3-bar-item w3-btn'>Admin Panel</a>";
} 
else {
echo "<a href='login.php' class='w3-bar-item w3-pale-red' >Login</a>";
} 
?>
</header>

<div class="w3-bar w3-border">


</div>
<br>
	