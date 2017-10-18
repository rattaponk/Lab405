<?php
	if($_FILES['myFile']['tmp_name']!="")
	{
		 
		$upload="C:\Apache24\htdocs\files\my.png";
		if (is_file($upload))
			unlink($upload);
		$date=date('Y').date('m').date('d').date('H').date('s').date('i');
		$namepic=$date;
		$userfile = $_FILES['myFile']['tmp_name'];
		$userfile_name = $_FILES['myFile']['name'];
		$get_ext = explode(".",$userfile_name);
		var_dump($get_ext);
		$count=count($get_ext);
		$last=$count-1;
		$type=$get_ext[$last];
		$newname="$namepic.$type";
		$upfile ="C:/Apache24/htdocs/files/$newname"; 
		if (is_uploaded_file($userfile))
		{
			if (!move_uploaded_file($userfile, $upfile))
			{
				echo "ปัญหาที่พบคือ : ไม่สามารถทำการ copy รูปภาพไปยัง directory ได้ กรุณากลับไปเช็ค directory ใหม่";
				exit;
			}
		}
	}
	else
		$newname="";
?>