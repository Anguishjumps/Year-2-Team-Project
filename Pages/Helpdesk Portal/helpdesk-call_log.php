<!DOCTYPE html>
<head>

<title>Call Log</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function returntoindex() {
	window.location.assign ("/Helpdesk Portal/helpdesk-index.php")
}
</script>

<body>
<button type="button" id = "return" onclick = "returntoindex()" > Return Home </button>
<h1>Recent calls</h1>
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
session_start();
$nextId = "C" . str_pad(ltrim(end($_SESSION['call_log'])['id'],"C") + 1, 3, "0", STR_PAD_LEFT);
$date = date("d/m/Y");
$time = date("H:i");
for($x = 0; $x < 10; $x++){
	if(array_key_exists($x, $_SESSION['call_log'])) {
		echo(
		"<tr><td>".$_SESSION['call_log'][$x]['id']
		."</td><td>".$_SESSION['call_log'][$x]['cId']
		."</td><td>".$_SESSION['call_log'][$x]['oName']
		."</td><td>".$_SESSION['call_log'][$x]['date']
		."</td><td>".$_SESSION['call_log'][$x]['time']
		."</td><td>".$_SESSION['call_log'][$x]['r4c']
		."</td><td>".$_SESSION['call_log'][$x]['pId']
		."</td></tr>");
	};
};
echo "</table><br>";
if(isset($_POST['submit'])) {
//Once sumbit is pressed the data from the form is stored in the "newCall" array
	$newCall = array(
		"id" => $_POST["id"],
		"cId" => $_POST["cId"], 
		"oName" => $_POST["oName"],
		"date" => $_POST["date"],
		"time" => $_POST["time"],
		"r4c" => $_POST["r4c"], 
		"pId" => $_POST["pId"]			
	);
//This array is then pushed onto the end of the call_log array
	array_push($_SESSION['call_log'],$newCall);
//And the page is refreshed causing the table and form to update
	header("Refresh:0");
  } else {
// Displays the form
	echo " <form action='' method='post'>
	<label for='id'>ID</label>
	<input name='id' type='text' id='id' value='$nextId' readonly><br>
	<label for='cId'>Caller ID</label>
	<input name='cId' type='text' id='cId' required><br>
	<label for='oName'>Operator Name</label>
	<input name='oName' type='text' id='oName' required><br>
	<label for='date'>Date</label>
	<input name='date' type='text' id='date' value='$date' readonly><br>
	<label for='date'>Time</label>
	<input name='time' type='text' id='time' value='$time' readonly><br>
	<label for='r4c'>Reason for call</label>
	<input name='r4c' type='text' id='r4c' required><br>
	<label for='pId'>Associated Problem ID's</label>
	<input name='pId' type='text' id='pId'><br>
	<input type='submit' name='submit' id='submit' value='Submit'>		
	</form>";

};

?>
</body>
