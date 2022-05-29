<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		php file upload
	</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data"> 
	// enctype= "multipart/form-data": nó sẽ chỉ định nội dung nào sẽ được sử dụng khi thêm vào biểu mẫu
		Select image to up load:
		<input type="file" name="fileToUpload" id="fileToUpload">
		//type = file: hiện thị trường đầu vào dưới dạng chọn tệp
		<input type="submit" name="Submit" value="Upload Image">
	</form>
</body>
</html>