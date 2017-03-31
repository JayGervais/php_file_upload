<!DOCTYPE html>
<html>
<head>
	<title>Browse Directory</title>
</head>
<body>
<h1>Browe Directories</h1>
<?php
$dir = 'uploads/';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

echo '<p>Upload directory is '.$dir.'</p>';
echo '<p>Directory Listing in alphabetical order, ascending:</p><ul>';

foreach($files1 as $file)
{
	if($file != "." && $file != ".." && $file != ".DS_Store")
	{
		echo '<li><a href="filedetails.php?file='.$file.'">'.$file.'</a></li>';
	}
}

echo '</ul>';

echo '<p>Upload directory is '.$dir.'</p>';
echo '<p>Directory Listing in alphabetical, descending:</p><ul>';

foreach($files2 as $file)
{
	if($file != "." && $file != ".." && $file != ".DS_Store")
	{
		echo '<li><a href="filedetails.php?file='.$file.'">'.$file.'</a></li>';
	}
}

echo '</ul>';

?>
</body>
</html>