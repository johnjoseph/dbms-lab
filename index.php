<html>
<head>
<title>DBMS lab</title>
<link href='css/style.css' type='text/css' rel='stylesheet'/>
</head>
<body>
<form id='block' method='get' action='form.php'>
<span class='left'>Name:</span><span class='right'><input type='text' name='name'  placeholder='name'/></span><br/>
<span class='left'>Password:</span><span class='right'><input type='password' name='password' placeholder='password'/></span><br/>
<select class='left' style='width:250px;height:20px;margin-top:5px;' name='type'>
<option value='student'>student</option>
<option selected='selected' value='faculty'>faculty</option>
<option value='other'>other</option>
</select><br/>
<input class='left' style='margin-top:10px;height:30px;' type='submit' value='submit'/>
</form>
</body>
</html>
