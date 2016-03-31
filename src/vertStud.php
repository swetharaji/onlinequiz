<!doctype html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #333;
}

li a {
    display: block;
    color: white;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #666;
    color: white;
}
</style>
</head>
<body>
<table class="table table-hover" style="border-color:#ebebe0" border="1" cellspacing="5px">
<thead>
	<tr class="warning">
		<th><center><h4>Options</h4></center></th>
	</tr>
</thead>
<tbody>
	<tr><td>
<ul>
  <li><a href="welcomeStud.php" target="c1">Home</a></li>
  <li><a href="attendExam.php" target="c1">Attend Exam</a></li>
  <li><a href="viewReport.php" target="c1">View Records</a></li>
  <li><a href="index.php" target="_main" onclick="return log_out(this)">Logout</a></li>
</ul>
</td></tr>
<script>
function log_out()
{
	window.alert("You Have Successfully Logout...");
}
</script>
</body>
</html>
