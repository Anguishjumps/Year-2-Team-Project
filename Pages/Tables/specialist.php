<!doctype html>
<html>

<head>

<title>Specialist Database</title>

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

<p> SPECIALISTS </p>

<table>
	
	<tr>
		<th> ID </th>
		<th> First Name </th>
		<th> Last Name </th>
		<th> Areas of Expertise </th>
		<th> Open Problems </th>
	</tr>
	
	<tr>
		<td> S001 </td>
		<td> Joshua </td>
		<td> Smith </td>
		<td> </td>
		<td> 2 </td>
	</tr>
	
	<tr>
		<td> S002 </td>
		<td> Jack </td>
		<td> Peters </td>
		<td> </td>
		<td> 0 </td>
	</tr>
	
	
	
</table>

</body>

</html>