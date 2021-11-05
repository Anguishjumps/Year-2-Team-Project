<!doctype html>
<html>

<head>

<title>Call Log</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script> 

function returntobrowse() {
	window.location.assign ("/Helpdesk Portal/helpdesk-browse.php")
}

</script>

<style>

table, th, td {
  border: 1px solid black;
}

table {
  <!--margin-left: auto; 
  margin-right: auto;-->
  table-layout: fixed;
  width: 60%; 
}

th {
  padding: 10px;
}
 
</style>

</head>

<body>

<button type="button" id = "return" onclick = "returntobrowse()" > Return </button>

<p> Call Log </p>

<table>
	
	<tr>
		<th> ID </th>
		<th> Caller ID </th>
		<th> Operator Name </th>
		<th> Date </th>
		<th> Time </th>
		<th> Reason for Call </th>
		<th> Associated Problem ID's </th>
	</tr>
<?php
//Opens session on this page so call log table can be accessed
	session_start();

//Goes through each row in the call log table and echos it to the table.
	foreach($_SESSION['call_log'] as $row){
		echo(
		"<tr><td>".$row['id']
		."</td><td>".$row['cId']
		."</td><td>".$row['oName']
		."</td><td>".$row['date']
		."</td><td>".$row['time']
		."</td><td>".$row['r4c']
		."</td><td>".$row['pId']
		."</td></tr>");
	};
?>
	
	
</table>

</body>

</html>