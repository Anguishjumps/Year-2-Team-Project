<!doctype html>
<html>

<head>

<title>Employee Database</title>

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

<p> EMPLOYEES </p>

<table>
	
	<tr>
		<th> ID </th>
		<th> First Name </th>
		<th> Last Name </th>
		<th> Job Title </th>
		<th> Department </th>
		<th> Telephone No. </th>
	</tr>
	
	<tr>
		<td> 0001 </td>
		<td> James </td>
		<td> Hunt </td>
		<td> Director </td>
		<td> IT </td>
		<td> 0712342118 </td>
	</tr>
	
	<tr>
		<td> 0002 </td>
		<td> Alex </td>
		<td> Johnson </td>
		<td> Manager </td>
		<td> Accounting </td>
		<td> 0712309818 </td>
	</tr>
	
	
	
</table>

</body>