<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["studentInfo"])) {
	echo "<meta http-equiv='refresh' content='0;url=login.html'>";
	exit;
}
?>
<html>
	<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta charset="utf-8"> 

		<link rel="stylesheet" type="text/css" href="style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.2.0/prototype.js" type="text/javascript"></script>
	</head>
	<body>
	<div id="panel">
		<div><h3 id="title">HANYANG ERICA</h3></div>

		<p>MAIN</p>
		<p><?php print_r($_SESSION["studentInfo"]) ?></p>

	</div>
	</body>
</html>