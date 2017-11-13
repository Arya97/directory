<?php
$msg = "";
if($handle = opendir('.')){
	while (false !== ($file = readdir($handle)))
	{
		if (($file != ".")
		&& ($file != ".."))
		{
			$msg .= '<li><a href="'.$file.'">'.$file.'</a></li>';
		}
	}
	closedir($handle);
}
?>
<!doctype html>
<html>
<head>
<title>List File yang ada pada php</title>
</head>
<body>
<h2>Masukan file jenis apapun dalam di rektori ini</h2>
<p>List file</p>
<ul>
<p><?php echo $msg ?></p>
</ul>
</body>
</html>