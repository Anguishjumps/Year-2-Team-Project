<!doctype html>
<html>

<head>

<title>Problem Type Database</title>

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

<p> Problem Types </p>

<table>
	
	<tr>
		<th> General Problem Type </th>
		<th> Refgined Type </th>
	</tr>
	
	<tr>
		<td> Printing </td>
		<td> Printing software </td>
	</tr>
	
	<tr>
		<td> Printing </td>
		<td> Printer queue cancellation </td>
	</tr>
	
	<tr>
		<td> Word processing </td>
		<td> Word processor tables </td>
	</tr>
	
	
	
</table>

</body>