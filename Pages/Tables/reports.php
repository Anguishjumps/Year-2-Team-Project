<!doctype html>
<html>

<head>

<title> Report Database</title>

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

<p> Report Table </p>

<table>
	
	<tr>
		<th> Report ID </th>
		<th> Call ID </th>
		<th> Problem ID </th>
	</tr>
	
	<tr>
		<td> R001 </td>
		<td> C001 </td>
		<td> P001 </td>
	</tr>
	
	<tr>
		<td> R002 </td>
		<td> C002 </td>
		<td> P002 </td>
	</tr>
	
	
	
</table>

</body>