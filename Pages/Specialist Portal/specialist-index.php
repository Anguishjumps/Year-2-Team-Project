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
			<td>Welcome to the Specialist portal! </td>
		  </tr>
		  <tr>
			<form action="/Specialist Portal/specialist-problem.php">
			<td colspan=1><input type="submit" name="view_problem" id="view_problem" value="View All Problems" class="larger" title="View a list of all problems and close solved problems." /></td>	
			</form>
		  </tr>
		  <tr>
			<form action="/Specialist Portal/specialist-browse.php">
			<td colspan=1><input type="submit" name="browse_tables" id="browse_tables" value="Browse Database" class="larger" title="View tables containing information on Specialists, Problem Types, and more."/></td>	
			</form>
		  </tr>
		  <tr>
			<form action="/index.php">
			<td colspan=1><input type="submit" name="log_out" id="log_out" value="Log Out" class="larger" title="Exit the Specialist portal" /></td>	
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