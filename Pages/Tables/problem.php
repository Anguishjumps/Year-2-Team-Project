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
  width: 60%; 
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
		<th> ID </th>
		<th> Problem Notes </th>
		<th> Hardware Serial No. </th>
		<th> Operating System </th>
		<th> Affected Software </th>
		<th> Problem Type </th>
		<th> Number of Times Reported </th>
		<th> Assigned Specialist </th>
		<th> Date Solved </th>
		<th> Solution Notes </th>
	</tr>
	
	<tr>
		<td> P001 </td>
		<td>  </td>
		<td> 56478890 </td>
		<td> - </td>
		<td> - </td>
		<td>  </td>
		<td> 1 </td>
		<td> S002 </td>
		<td>  </td>
		<td>  </td>
	</tr>
	
	<tr>
		<td> P002 </td>
		<td>  </td>
		<td> - </td>
		<td> Windows </td>
		<td> Microsoft Office </td>
		<td>  </td>
		<td> 2 </td>
		<td> S001 </td>
		<td> 31/10/2021 </td>
		<td> Software corrupted </td>
	</tr>
	
	
	
</table>

</body>