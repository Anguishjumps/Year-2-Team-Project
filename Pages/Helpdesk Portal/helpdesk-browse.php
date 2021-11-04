<!doctype html>
<html>

<head>

<title>Browse Databases</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

function employeedtb() {
	window.location.assign ("/Tables/employee.php")
}

function equipmentdtb() {
	window.location.assign ("/Tables/equipment.php")
}

function softwaredtb() {
	window.location.assign ("/Tables/software.php")
}

function specialistdtb() {
	window.location.assign ("/Tables/specialist.php")
}

function problemdtb() {
	window.location.assign ("/Tables/problem.php")
}

function callsdtb() {
	window.location.assign ("/Tables/calls.php")
}
function returntoindex() {
	window.location.assign ("/Helpdesk Portal/helpdesk-index.php")
}

</script>

<style>

td {
  padding: 10px;
}

</style>

</head>

<body>
<button type="button" id = "return" onclick = "returntoindex()" > Return Home </button>
<h1> Browse </h1>
<table>
	<tr>
		<td>Employee Database</td>
		<td> <button type="button" id = "employee" onclick = "employeedtb()" >View</button> </td>
	</tr>
	<tr>
		<td>Equipment Database</td>
		<td> <button type="button" id = "equipment" onclick = "equipmentdtb()" >View</button> </td>
	</tr>
	<tr>
		<td>Software Database</td>
		<td> <button type="button" id = "software" onclick = "softwaredtb()" >View</button> </td>
	</tr>
	<tr>
		<td>Specialist Database</td>
		<td> <button type="button" id = "specialist" onclick = "specialistdtb()">View</button> </td>
	</tr>
	<tr>
		<td>Problem Database</td>
		<td> <button type="button" id = "problem" onclick = "problemdtb()" >View</button> </td>
	</tr>
	<tr>
		<td>Call Log</td>
		<td> <button type="button" id = "call" onclick = "callsdtb()" >View</button> </td>
	</tr>
</table>
</body>


</html>