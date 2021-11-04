<!doctype html>
<html>

<head>

<title>Call Log</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script> 

function returntobrowse() {
	window.location.assign ("browse.php")
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
	
	<tr>
		<td> C001 </td>
		<td> 0002 </td>
		<td> John Smith </td>
		<td> 30/10/2021 </td>
		<td> 13:27 </td>
		<td> Issue with printer </td>
		<td> P001 </td>
	</tr>
	
	<tr>
		<td> C002 </td>
		<td> 0010 </td>
		<td> John Smith </td>
		<td> 31/10/2021 </td>
		<td> 09:10 </td>
		<td> Issue with MS Office applications </td>
		<td> P002 </td>
	</tr>
	
	
	
</table>

</body>

</html>