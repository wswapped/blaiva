<?php
	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');
	if(!empty($_FILES['image'])){
		//save image
		$image = $_FILES['image'];
		$filename = "images/".time().md5(time()).".jpg";
		if(move_uploaded_file($image['tmp_name'], $filename)){
			echo $filename;
			flush();
			die();
		}
	}else{
		echo "ismg.jpg";
	}

?>