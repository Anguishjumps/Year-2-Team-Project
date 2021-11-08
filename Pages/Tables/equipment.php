<!doctype html>
<html>

<head>

<title>Equipment Database</title>

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

<p> Equipment </p>

<table>
	
	<tr>
		<th> Serial Number </th>
		<th> Type </th>
		<th> Make </th>
	</tr>
	
	<tr>
		<td> H56478890 </td>
		<td> Printer </td>
		<td> Samsung </td>
	</tr>
	
	<tr>
		<td> 83245678 </td>
		<td> Scanner </td>
		<td> Samsung </td>
	</tr>
	
	
	
</table>

</body>