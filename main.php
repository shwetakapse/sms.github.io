<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main-css.css">

	<title>main</title>
</head>
<body>
<div id="header">
<form method="post" action="displayP.php">
	<h1 align="center">WELCOME</h1>
	
</div>
<div class="main">
	<img src="image.jpg" width="100px" height="100px"><a href="admin.php" target="_blank"><h4>Admin Log-in</h4></a>

<table align="center">
	<tr><th colspan="2">Student Information</th></tr>
	<tr><td><b>Enter Number</b></td><td><input type="text" name="num"></td></tr>
	<tr><td><b>Course Name</b></td>
		<td>
            <select>
			        <option value="Course">Please Select The Course</option>
			        <option value="WB">Web-Designing</option>
			        <OPTION value="ST">Software-Testing</OPTION>
			        <OPTION value="DB">Database</OPTION>
			        <OPTION value="SF">Salesforce</OPTION>
	        </select>
	    </td>    
    <tr><th colspan="2"><input type="submit" name="submit" value="submit"></th></tr>

</table>
</div>
<center><div id="footer"><h3>&copy;WeLcOmE</h3></div></center>
</form>

</body>
</html>