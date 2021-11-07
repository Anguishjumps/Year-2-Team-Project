<!DOCTYPE html>
<head>

<title>Call Log</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

table{
    border: 1px solid black;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    border-collapse: collapse; 
}
table:first-child{
    margin-top: 50px;
}
td{
    border-bottom: 1px solid black;
    border-right: 1px solid black;
    padding: 3px;
    padding-right: 10px;
    text-align: center;
    font-size: 14px;

}

th {
    border-bottom: 1px solid black;
    padding: 5px;
}

#formContainer{
    display: flex;
    justify-content: center;
    margin-top: 50px;
}
.form_layout input{
    display: block;
}
.form_layout label{
    display: inline-block;
}
.form_layout select{
    display: block;
}

#form{
    margin-right: 30px;
}
.button_container{
    display: flex;
    justify-content: center;
    margin-top: 10px;
    
}
button{
    margin-right: 5px;
}
label{
    margin-top: 10px;
}

h3{
    text-align: center;
    text-decoration: underline;
}


.form_layout1 select{
    display: block;
}
label{ 
    display: inline-block;
    width: 150px;
}
 
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function returntoindex() {
	window.location.assign ("/Helpdesk Portal/helpdesk-index.php")
}
</script>

<body>
<button type="button" id = "return" onclick = "returntoindex()" > Return Home </button>
<h3>Recent calls</h3>
<table>
	<tr>
		<th> ID </th>
		<th> Caller ID </th>
		<th> Operator Name </th>
		<th> Date </th>
		<th> Time </th>
		<th> Reason for Call </th>
	</tr>
<?php
session_start();
$nextId = "C" . str_pad(ltrim(end($_SESSION['call_log'])['id'],"C") + 1, 3, "0", STR_PAD_LEFT);
$date = date("d/m/Y");
$time = date("H:i");
for($x = 0; $x < 10; $x++){
	if(array_key_exists($x, $_SESSION['call_log'])) {
		echo(
		"<tr><td>".$_SESSION['call_log'][$x]['id']
		."</td><td>".$_SESSION['call_log'][$x]['cId']
		."</td><td>".$_SESSION['call_log'][$x]['oName']
		."</td><td>".$_SESSION['call_log'][$x]['date']
		."</td><td>".$_SESSION['call_log'][$x]['time']
		."</td><td>".$_SESSION['call_log'][$x]['r4c']
		."</td></tr>");
	};
};
echo "</table><br>";
if(isset($_POST['submitCall'])) {
//Once sumbit is pressed the data from the form is stored in the "newCall" array
	$newCall = array(
		"id" => $_POST["id"],
		"cId" => $_POST["cId"], 
		"oName" => $_POST["oName"],
		"date" => $_POST["date"],
		"time" => $_POST["time"],
		"r4c" => $_POST["r4c"], 
	);
//This array is then pushed onto the end of the call_log array
	array_push($_SESSION['call_log'],$newCall);
//And the page is refreshed causing the table and form to update
	header("Refresh:0");
  } else {
// Displays the form
	echo "<div id = 'formContainer'>
	<form action='' method='post'>
	<label for='id'>ID</label>
	<input name='id' type='text' id='id' value='$nextId' readonly><br>
	<label for='cId'>Caller ID</label>
	<input name='cId' type='text' id='cId' required><br>
	<label for='oName'>Operator Name</label>
	<input name='oName' type='text' id='oName' required><br>
	<label for='date'>Date</label>
	<input name='date' type='text' id='date' value='$date' readonly><br>
	<label for='date'>Time</label>
	<input name='time' type='text' id='time' value='$time' readonly><br>
	<label for='r4c'>Reason for call</label>
	<input name='r4c' type='text' id='r4c' required><br>
	<input type='submit' name='submitCall' id='submitCall' value='SUBMIT'>		
	</form></div>";

};

?>
   <table id = 'table'>
        <tr>
            <th>Problem ID</th>
                <th>Problem Type</th>
                <th>Problem Notes</th>
                <th>Hardware Serial No.</th>
                <th>Operating System</th>
                <th>Software</th>
                <th>Assigned ID</th>
                <th>Solution Notes</th>
                <th>Date</th>
        </tr>
        <tbody id = 'tbody2'></tbody>
    </table>

    <div id = "formContainer">
        <!-- Change problem type -->
        <div id = "form">
            <div class = "form_layout2">
                <label>Problem ID</label>
                <input type="text" id = "problemID" required>
            </div>
            <div class = "form_layout2">
                <label>Problem Type</label>
                <input type="text" id = "problemType" required>
            </div>
            <div class = "form_layout2">
                <label>Problem Notes</label>
                <input type="text" id = "problemNotes">
            </div>
            <div class = "form_layout2">   
                <label>Hardware Serial No.</label>
                <input type="text" id = "hardwareSerial">
            </div>
            <div class = "form_layout2">  
                <label>Operating System</label>
                <input type="text" id = "os">
            </div>
            <div class = "form_layout2">
                <label>Software</label>
                <input type="text" id = "software">
            </div>
            <div class = "form_layout2">
                <label>Assigned ID</label>
                <input type="text" value = "003" id = "assignedID">
            </div>
            <div class = "form_layout2">
                <label>Solution Notes</label>
                <input type="text" id = "solutionNotes">
            </div>
            <div class = "form_layout2">
                <label>Date</label>
                <input type="text" id = "date2" value = "-" readonly>
            </div>
            
                <div class="button_container">
                <button id="submitForm"> SUBMIT </button>
            </div>
        </div>
    </div>

    <script>
        var array = [
                        ['P001', "printer", "Printer unresponsive", "H56478890", "-","-","004","-","-"],
                        ['P002', "-","-","-","Windows","Microsoft Office","003","-","-"]]
        table = document.getElementById("tbody2");
        for(var i = 0; i < array.length; i++){
            var newRow = table.insertRow(table.length);
            for(var j = 0; j < array[i].length; j++){
                var cell = newRow.insertCell(j);
                cell.innerHTML = array[i][j];
            }
        }

        $("#submitForm").click(function(){ 
            var tempArray = []
            var a = $('#problemID').val();
            var c = $('#problemType').val();
            var d = $('#problemNotes').val();
            var e = $("#hardwareSerial").val();
            var f = $("#os").val();
            var g = $("#software").val();
            var h = $('#assignedID').val();
            var i = $('#solutionNotes').val();
            var j = $('#date2').val();
            tempArray.push(a,c,d,e,f,g,h,i,j);
            array.push(tempArray);
            console.log(array);
            $('#tbody2').html("");
            table = document.getElementById("tbody2");
            for(var i = 0; i < array.length; i++){
                var newRow = table.insertRow(table.length);
                for(var j = 0; j < array[i].length; j++){
                                var cell = newRow.insertCell(j);
                                cell.innerHTML = array[i][j];
                }

            }   
        });

    </script>

</body>
