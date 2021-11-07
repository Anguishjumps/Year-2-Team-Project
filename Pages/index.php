<html>
	<title>Helpdesk System Login Page</title>
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
//Opens sessions to allow 2d array to be passed between the webpages
			session_start();
//Creates start data for prototype call log table
			$call_log = array(
				array(
					"id" => "C001",
					"cId" => "0002", 
					"oName" => "John Smith", 
					"date" => "30/10/2021",
					"time" => "13:27",
					"r4c" => "Issue with printer", 
					"pId" => "P001"
					),
				array(
					"id" => "C002", 
					"cId" => "0010", 
					"oName" => "John Smith", 
					"date" => "31/10/2021", 
					"time" => "9:10",
					"r4c" => "Issue with MS Office applications", 
					"pId" => "P002",
					)
			);
//Stores call log entrys in the session "call_log" array allowing other web pages to access it		
			$_SESSION['call_log'] = $call_log;
			$servername = "localhost"; //Data
			$username = "team028";
			$password = "R8U62QHHKN";
			$dbname = "team028";
		?>
		<h1> Helpdesk System Login Page </h1>
	</head>
	<body>
	  <form action="index.php" method="get" id="view" onSubmit="return loginCheck();">
		<table border="1">
		  <tr>
			<td colspan=1><label for="username">Username</label></td>
			<td colspan=1><input name="username" type="text" class="larger" id="username" value="" size="12" /></td>
		  </tr>
		  <tr>
			<td colspan=1><label for="password">Password</label></td>
			<td colspan=1><input name="password" type="text" class="larger" id="password" value="" size="12" /></td>
		  </tr>
		  <tr>
			<td colspan=2><input type="submit" name="submit" id="submit" value="Log In" class="larger" /></td>	
		  </tr>
		</table>
		</form>
		
		<script type=text/javascript>
			function loginCheck() {
			  if ((document.getElementById("username").value == "helpdesk") && (document.getElementById("password").value == "123")) {
				sessionStorage.setItem("userType", "h");
				document.getElementById("view").action = "Helpdesk Portal/helpdesk-index.php"
			  }
			  if ((document.getElementById("username").value == "specialist") && (document.getElementById("password").value == "234")) {
				sessionStorage.setItem("userType", "s");
				document.getElementById("view").action = "Specialist Portal/specialist-index.php"
			  }
			  if ((document.getElementById("username").value == "analyst") && (document.getElementById("password").value == "345")) {
				sessionStorage.setItem("userType", "a");
				document.getElementById("view").action = "Analyst Portal/analyst-index.php"
			  }
			}
		</script>
		
		<table border="1">
		  <tr>
		    <th colspan=3>Login Details</th>
		  </tr>
		  <tr>
			<th colspan=1>Role</th>
			<th colspan=1>Username</th>
			<th colspan=1>Password</th>
		  </tr>
		  <tr>
			<td colspan=1>Helpdesk Operator</td>
			<td colspan=1>helpdesk</td>
			<td colspan=1>123</td>
		  </tr>
		  <tr>
			<td colspan=1>Specialist</td>
			<td colspan=1>specialist</td>
			<td colspan=1>234</td>
		  </tr>
		  <tr>
			<td colspan=1>Analyst</td>
			<td colspan=1>analyst</td>
			<td colspan=1>345</td>
		  </tr>
		  <tr>
		  </tr>
		</table>
		
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