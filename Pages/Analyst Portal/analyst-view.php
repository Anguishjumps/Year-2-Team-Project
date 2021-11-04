<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
#myDIV1 {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
#myDIV2 {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
#myDIV3 {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}

</style>
</head>
<body>
<form action="/Analyst Portal/analyst-index.php">
<td colspan=1><input type="submit" name="submit" id="submit" value="Return Home" class="larger" /></td>	
</form>
<h2>Analyst Data</h2>

<h4>Hardware and software performance</h4>
<div id="myDIV" style="display:none">
Table format data for software and hardware performance
</div>
<button onclick="myFunction()">View</button>

<h4>Specialist performance</h4>
<div id="myDIV1" style="display:none">
Table format data for Specialist performance
</div>
<button  onclick="myFunction1()">View</button>

<h4>Employee performance</h4>
<div id="myDIV2" style="display:none">
Table format data for employee performance
</div>
<button onclick="myFunction2()">View</button>

<h4>Specialist performance in given time</h4>
<div id="myDIV3" style="display:none">
Table format for Specialist performance in given time
</div> 
<button onclick="myFunction3()">View</button>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
  
    x.style.display = "block";
  }
  
}
  


function myFunction1() {
  var x = document.getElementById("myDIV1");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function myFunction2() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function myFunction3() {
  var x = document.getElementById("myDIV3");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

</script>

</body>
</html>

