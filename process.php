<?php
//var_dump($_FILES);
$targetDir = 'uploads/';
$fn = $_FILES['imgs']['name'];
$tn = $_FILES['imgs']['tmp_name'];

for($i = 0; $i < count($fn); $i++)
{
	$targetFile = $targetDir . basename($fn[$i]);
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

	if(file_exists($targetFile))
	{
		//如果檔案存在
	}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
	{
	   	//如果不是圖片的處理
	}

	if(move_uploaded_file($tn[$i], $targetFile))
	{
		echo "The file " . $fn[$i] . " success!<br>";
	}
	else
	{
		echo "The file " . $fn[$i] . " fail!<br>";
	}
}
?>