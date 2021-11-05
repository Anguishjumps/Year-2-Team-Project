<html>
	<title>Specialist Portal</title>
	<head>
		<style type="text/css">
			body {
				font-family: Verdana, Arial, Helvetica, sans-serif;
				background-color: #B9B9B9;
			}
			.center {
				text-align:center;
			}
			body,td,th {
				color: black; 
			}
			.larger {
				font-size:larger;
				text-align:left;
			}
			table {
				margin-left:auto;
				margin-right:auto;
				text-align:center;
				vertical-align: top;
			}
			p {
				margin-left:auto;
				margin-right:auto;
				text-align:center;
			}
			h1 {
				margin-left:auto;
				margin-right:auto;
				text-align:center;
			}
			h2 {
				margin-left:auto;
				margin-right:auto;
				text-align:center;
			}
			.fixed {
				font-family: Courier, monospace;
				white-space: pre;
				background-color:cornsilk;
			}
		</style>
		<?php 
			$servername = "localhost"; //Data
			$username = "team028";
			$password = "R8U62QHHKN";
			$dbname = "team028";
		?>
		<h1> Specialist Portal </h1>
	</head>
	<body>
		<table border="0">
		  <tr>
			<form action="">
			<td colspan=1><input type="submit" name="submit" id="submit" value="View Problems" class="larger" /></td>	
			</form>
		  </tr>
		  <tr>
			<form action="/Helpdesk Portal/helpdesk-browse.php">
			<td colspan=1><input type="submit" name="submit" id="submit" value="Browse" class="larger" /></td>	
			</form>
		  </tr>
		  <tr>
			<form action="/index.php">
			<td colspan=1><input type="submit" name="submit" id="submit" value="Log Out" class="larger" /></td>	
			</form>
		  </tr>
		  
		
		<?php
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			mysqli_close($conn);
		?>
	</body>
</html>