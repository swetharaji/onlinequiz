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
  <li><a href="welcomeInst.php" target="c1">Home</a></li>
  <li><a href="enterExam.php" target="c1">Enter Exam details</a></li>
  <!--li><a href="enterQues.php" target="c1">Enter Questions</a></li-->
  <li><a href="enterStudent.php" target="c1">Manage Student Details</a></li>
  <!--li><a href="viewStudentbatch.php" target="c1">View Student As a Batch</a></li-->
  <li><a href="viewStud.php" target="c1">View Student</a></li>
  <!--li><a href="deleteExam.php" target="c1">Delete Exam</a></li-->
  <!--li><a href="deleteQuestions.php" target="c1">Delete Questions</a></li><li></li-->
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
