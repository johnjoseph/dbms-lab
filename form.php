<html>
<head>
<title>DBMS</title>
<link href='css/style.css' type='text/css' rel='stylesheet'/>
</head>
<body>
<?php
	require_once("connect.php");
	$name=isset($_REQUEST['name'])?$_REQUEST['name']:NULL;
	$password=isset($_REQUEST['password'])?hash(md5,$_REQUEST['password']):NULL;
	$type=isset($_REQUEST['type'])?$_REQUEST['type']:NULL;
	$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:NULL;
	if($mode)
	{
		$query="DELETE FROM `list` WHERE `name`='$name'";		
	}
	else if($name&&$password&&$type)
	{
		$query="INSERT INTO `list` (`name`,`password`,`type`) VALUES ('$name','$password','$type')";
	}
	$result=$mysqli->query($query);
	$query="SELECT * FROM `list` WHERE 1";
	$result=$mysqli->query($query);
	$out="<table id='block' style='height:auto;'>";
	$out.="<tr><th>Name</th><th>Password</th><th>Type</th><th></th></tr>";
	while($row=$result->fetch_assoc())
	{
		$out.="<tr><td>".$row['name']."</td><td>".$row['password']."</td><td>".$row['type']."</td><td><a href='form.php?mode=del&name=".$row['name']."'>delete</a></td></tr>";	
	}
	$out.="</table>";
	echo $out;		
?>
</body>
</html>

