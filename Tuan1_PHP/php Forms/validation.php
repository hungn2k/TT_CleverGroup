<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>validation</title>
</head>
<body>
	<h2>PHP Form validation Example</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Website: </td>
				<td><input type="text" name="website"></td>
			</tr>
			<tr>
				<td>Comment:</td>
				<td><textarea name="Comment" rows="6" cols="50"></textarea></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="other">Other
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" name="submit">Submit</button>
					<button type="reset">Reset</button>
				</td>
			</tr>
		</table>

		<?php 
			$website = $name = $email = $gender = $Comment = $web = "";
			if ($_SERVER['REQUEST_METHOD']=="POST"){

				$name = test_input($_POST['name']);
				$email = test_input($_POST["email"]);
 				$website = test_input($_POST["website"]);
  				$Comment = test_input($_POST["Comment"]);
  				$gender = test_input($_POST["gender"]);
			}

			function test_input($data){

				$data = trim($data); // bỏ các ký tự như khoảng trống, tab, ..
				$data = stripcslashes($data); //Loại bỏ backslashes (\) khỏi dữ liệu nhập của người dùng
				$data = htmlspecialchars($data); // chuyển đổi các ký tự đặc biệt thành các thực thể html

				return $data;
			}
		 ?>

		<?php 
			echo "<h2> Your Input </h2>";
			echo "Name: ".$name;
			echo "<br>";
			echo "Email: ".$email;
			echo "<br>";
			echo "website: ".$website;
			echo "<br>";
			echo "Comment: ".$Comment;
			echo "<br>";
			echo "Gender: ".$gender;
		?>




	</form>
</body>
</html>