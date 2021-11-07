<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel = "stylesheet" href = "../Group/problem-style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style type="text/css">
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
	</style>
</head>
<body>
    <h3> Assigned Problems </h3>
    <table id = 'table'>
        <tr id = 'header'>
            <th>Problem ID</th>
                <th>Phone No.</th>
                <th>Problem Type</th>
                <th>Problem Notes</th>
                <th>Hardware Serial No.</th>
                <th>Operating System</th>
                <th>Software</th>
                <th>Assigned ID</th>
                <th>Solution Notes</th>
                <th>Date</th>
        </tr>
        <tbody id = 'tbody'></tbody>
    </table>

    <h3> All Problems</h3>
    <table id = 'table'>
        <tr>
            <th>Problem ID</th>
                <th>Phone No.</th>
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
            <div class = "form_layout">
                <label>Problem ID</label>
                <input type="text" id = "problemID">
            </div>
            <div class = "form_layout"> 
                <label>Problem Type</label>
                <input type="text" id = "problemType">
            </div>
            <div class="button_container">
            <button id="submitProblemType"> SUBMIT </button>
            <button> CLEAR </button>
            </div>
        </div>

            <!-- Change solution notes -->
        <div id = "form">
            <div class = "form_layout">
                <label>Problem ID</label>
                <input type="text" id = "problemID2">
            </div>
            <div class = "form_layout"> 
                <label>Solution Notes</label>
                <input type="text" id = "solutionNotes">
            </div>
            <div class = "form_layout"> 
                <label>Date</label>
                <input type="text" id = "date">
            </div>
            <div class="button_container">
            <button id="submitSolution"> SUBMIT </button>
            <button> CLEAR </button>
            </div>
        </div>

        <!-- Assigning specialist -->
        <div id = "form">
            <div class = "form_layout">
                <label>Problem ID</label>
                <input type="text" id = "problemID3">
            </div>
            <div class = "form_layout"> 
                <label>Assign Problem</label>
                <input type="text" id = "assignTo">
            </div>
            <div class="button_container">
            <button id="submitAssign"> SUBMIT </button>
            <button> CLEAR </button>
            </div>
        </div>


    <script>
        var userID = "0099";

                var array = [
                            ['P001', "07358613397", "printer", "Printer unresponsive", "H56478890", "-","-","0099","-","-"],
                            ['P002', "07418613690", "-","-","-","Windows","Microsoft Office","0100","-","-"]]

                table = document.getElementById("tbody");
                for(var i = 0; i < array.length; i++){
                    if (userID == array[i][7]){
                        var newRow = table.insertRow(table.length);
                        for(var j = 0; j < array[i].length; j++){
                            var cell = newRow.insertCell(j);
                            cell.innerHTML = array[i][j];
                        }
                    }
                }
                table = document.getElementById("tbody2");
                    for(var i = 0; i < array.length; i++){
                        var newRow = table.insertRow(table.length);
                        for(var j = 0; j < array[i].length; j++){
                            var cell = newRow.insertCell(j);
                            cell.innerHTML = array[i][j];
                    }
                }


           $("#submitProblemType").click(function(){ 
            var x = $('#problemID').val();
            var y = $('#problemType').val();
            for(var i = 0; i < array.length; i++){
                for(var j = 0; j < array[i].length; j++){
                    if(x == array[i][j]){
                        
                        // Changing array value
                        array[i][2]=y;
                        console.log(array[i][2]);
                        //Clearing tables
                        $('#tbody').html("");
                        $('#tbody2').html("");
                        // Inserting changed array into table 1
                        table = document.getElementById("tbody");
                        for(var i = 0; i < array.length; i++){
                            if (userID == array[i][7]){
                                var newRow = table.insertRow(table.length);
                                for(var j = 0; j < array[i].length; j++){
                                    var cell = newRow.insertCell(j);
                                    cell.innerHTML = array[i][j];
                                }
                            }
                        }
                        table = document.getElementById("tbody2");
                        for(var i = 0; i < array.length; i++){
                            var newRow = table.insertRow(table.length);
                            for(var j = 0; j < array[i].length; j++){
                                var cell = newRow.insertCell(j);
                                cell.innerHTML = array[i][j];
                            }
                        }
                    }
                }

            }
            
            });

            $("#submitSolution").click(function(){ 
            var x = $('#problemID2').val();
            var y = $('#solutionNotes').val();
            var z = $('#date').val();
            for(var i = 0; i < array.length; i++){
                for(var j = 0; j < array[i].length; j++){
                    if(x == array[i][j]){
                        // Changing array value
                        array[i][8]=y;
                        array[i][9]=z;
                        console.log(array[i][2]);
                        //Clearing tables
                        $('#tbody').html("");
                        $('#tbody2').html("");
                        // Inserting changed array into table 1
                        table = document.getElementById("tbody");
                        for(var i = 0; i < array.length; i++){
                            if (userID == array[i][7]){
                                var newRow = table.insertRow(table.length);
                                for(var j = 0; j < array[i].length; j++){
                                    var cell = newRow.insertCell(j);
                                    cell.innerHTML = array[i][j];
                                }
                            }
                        }
                        // Inserting changed array into table 2
                        table = document.getElementById("tbody2");
                        for(var i = 0; i < array.length; i++){
                            var newRow = table.insertRow(table.length);
                            for(var j = 0; j < array[i].length; j++){
                                var cell = newRow.insertCell(j);
                                cell.innerHTML = array[i][j];
                            }
                        }
                    }
                }

            }
            
            });
            $("#submitAssign").click(function(){ 
            var x = $('#problemID3').val();
            var y = $('#assignTo').val();
            for(var i = 0; i < array.length; i++){
                for(var j = 0; j < array[i].length; j++){
                    if(x == array[i][j]){
                        console.log(y);
                        // Changing array value
                        array[i][7]=y;
                        console.log(array[i][2]);
                        //Clearing tables
                        $('#tbody').html("");
                        $('#tbody2').html("");
                        // Inserting changed array into table 1
                        table = document.getElementById("tbody");
                        for(var i = 0; i < array.length; i++){
                            if (userID == array[i][7]){
                                var newRow = table.insertRow(table.length);
                                for(var j = 0; j < array[i].length; j++){
                                    var cell = newRow.insertCell(j);
                                    cell.innerHTML = array[i][j];
                                }
                            }
                        }
                        // Inserting changed array into table 2
                        table = document.getElementById("tbody2");

                        for(var i = 0; i < array.length; i++){
                            var newRow = table.insertRow(table.length);
                            for(var j = 0; j < array[i].length; j++){
                                var cell = newRow.insertCell(j);
                                cell.innerHTML = array[i][j];
                            }
                        }

                    }
                }

            }
            
            });

            
        

    </script>
    
</body>
</html>