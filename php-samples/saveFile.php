<?php

	if($_FILES['myFile']['tmp_name']!="")
	{
		// check if a file existed!!! 
		$upload="C:\Apache24\htdocs\files\my.png";
		if (is_file($upload))
			unlink($upload);

		// create filename
		$date=date('Y').date('m').date('d').date('H').date('s').date('i');
		$namepic=$date;
		
		// get file extension
		$userfile = $_FILES['myFile']['tmp_name'];
		$userfile_name = $_FILES['myFile']['name'];
		$get_ext = explode(".",$userfile_name);

		// e.g. "abc.xyz.holiday.png" => ['abc','xyz','holiday','png']
		var_dump($get_ext);

		// count(['abc','xyz','holiday','png']) is 4
		$count=count($get_ext);
		$last=$count-1;

		// $type is 'png'
		$type=$get_ext[$last];
		$newname="$namepic.$type";

		// finally get saved filename and location
		$upfile ="C:/Apache24/htdocs/files/$newname";
		
		// check if upload is successful?
		if (is_uploaded_file($userfile))
		{
			// check if moving (and renaming) tmp_name to the final name is ok?
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