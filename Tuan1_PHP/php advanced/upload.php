<?php 
	$target_dir = "uploads/" ;//chỉ định thư mục nơi tệp sẽ được đặt 
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);; //chỉ định đường dẫn của tệp được tải lên
	$uploadOK = 1; // chưa được sử dụng 
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// check if image file is a actual image or fake
	if(isset($_POST['submit'])){
		$check = getimagesize($_FILES['fileToUpload']["tmp_name"]);
		if ($check !== false) {
			echo "File is an image -" .check["mime"]. ".";
			$uploadOK =1;

		}else{
			echo "File is not an image.";
			$uploadOK = 0;
		}
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	  echo "Sorry, file already exists.";
	  $uploadOk = 0;
	}

	//check file size
	if ($_FILES['fileToUpload']['size'] > 500000){

		echo "Sorry, tour file is too large";
		$uploadOK = 0;
	}

	// Allow certain file formats : cho phep nguoi dung tai cac tep JPG, JPEG,PNG vaf GIF --> sai: $uploadOK = 0
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "Sorry, only JPG,, JPEG,PNG & GIF file are allowed";
		$uploadOK = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	  } else {
	    echo "Sorry, there was an error uploading your file.";
	  }
	}

 ?>