<!doctype html>
<html>

<head>

<title>Software Database</title>

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

<p> Software </p>

<table>
	
	<tr>
		<th> Software </th>
		<th> License Number </th>
	</tr>
	
	<tr>
		<td> Microsoft Office </td>
		<td> 045-648-234 </td>
	</tr>
	
	<tr>
		<td> Adobe Acrobat DC Pro </td>
		<td> 456-101-214 </td>
	</tr>
	
	
	
</table>

</body>