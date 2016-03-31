<!doctype html>
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<title>Institution | Welcome</title>
<style>
div#i1
{
	position : relative;
	border :transparent;
	width: 70%;
	top:30px;
	float : left;
}
p {
	color: #3d3d29;
	font-family : Arial, Helvetica, sans-serif;
}
div#i2{
	position:relative;
	top:30px;
	float:right;
}
div#i3
{
	height : 1%;
	width :50%;
	position : absolute;
	top:310px;
	left : 30px;

}
ol {
	color : #333;
	font-size : larger;
    background: #999999;
    padding: 20px;
}
ol li {
	color:#333;
    background: #e6e6e6;
    padding: 5px;
    margin-left: 35px;
}
</style>
</head>
<body>
	<div class="container"  id="i1">
	<div class="jumbotron">
    <h1>Welcome &nbsp;<?php $var=$_COOKIE['lname'];
						echo $var; ?></h1>      
    <p>Now conducting the exams are very simple. You just need to follow these steps.</p>
	<hr>
	<dl>
		<dt><h4>Steps</h4></dt>
		<dd>
			<ol>
				<li>Enter the exam details</li>
				<li>Enter Questions</li>
				<li>Enter Student Lists</li>
			</ol>
		</dd>
	</dl>
	</div>
	</div>
	<div id="i2">
		<img src="inst welcome.jpg">
	</div>
</body>
</html>