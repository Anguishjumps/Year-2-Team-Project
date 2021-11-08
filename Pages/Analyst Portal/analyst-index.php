<html>
	<title>Analyst Portal</title>
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
		</style>
		<?php 
			$servername = "localhost"; //Data
			$username = "team028";
			$password = "R8U62QHHKN";
			$dbname = "team028";
		?>
		<h1> Analyst Portal </h1>
	</head>
	<body>
		<table border="0">
		  <tr>
			<td>Welcome to the Analyst portal! </td>
		  </tr>
		  <tr>
			<form action="/Analyst Portal/analyst-view.php">
			<td colspan=1><input type="submit" name="view_performance" id="view_performance" value="View Performance" class="larger" title="View statistics on equipment breakages and employee usefulness." /></td>	
			</form>
		  </tr>
		  <tr>
			<form action="/index.php">
			<td colspan=1><input type="submit" name="log_out" id="log_out" value="Log Out" class="larger" title="Exit the Analyst portal" /></td>	
			</form>
		  </tr>
		  <tr>
			<td>Stuck? Hover over a button for a brief description of the functions it allows you to perform.</td>
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