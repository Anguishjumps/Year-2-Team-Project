<!doctype html>
<html>

<head>

<title>Problem Database</title>

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
  width: 75%; 
}

th {
  padding: 10px;
}
 
</style>

</head>

<body>

<button type="button" id = "return" onclick = "returntobrowse()" > Return </button>

<p> Problems </p>

<table>
	
	<tr>
		<th> Problem ID </th>
		<th> Problem Type </th>
		<th> Problem Notes </th>
		<th> Hardware Serial No. </th>
		<th> Operating System </th>
		<th> Software </th>
		<th> Assigned ID </th>
		<th> Solution Notes </th>
		<th> Date Solved </th>
		<th> Time Solved </th>
	</tr>
	
	<tr>
		<td> P001 </td>
		<td> Printer </td>
		<td> Printer unresponsive </td>
		<td> H56478890 </td>
		<td> - </td>
		<td> - </td>
		<td> 0004 </td>
		<td> - </td>
		<td> - </td>
		<td> - </td>
	</tr>
	
	<tr>
		<td> P002 </td>
		<td> - </td>
		<td> - </td>
		<td> - </td>
		<td> Windows </td>
		<td> Microsoft Office </td>
		<td> 0003 </td>
		<td> - </td>
		<td> - </td>
		<td> - </td>
	</tr>
	
	
	
</table>

</body>

</html>