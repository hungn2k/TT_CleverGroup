<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP REquired Fields </title>
	<style>.error{color: red;}</style>
</head>
<body>
	<?php 
		//define variable and set to empty values
		$nameErr = $emailErr = $genderErr = $websiteErr = " ";
		$name = $email = $gender = $comment = $website = " ";

		if ($_SERVER['REQUEST_METHOD'] == "POST"){

			if(empty($_POST['name'])){
				$nameErr = "Name is required";
			}else {
				$name= test_input($_POST['name']);
			}

			if(empty($_POST['email'])){
				$emailErr = "email is required";
			}else {
				$email= test_input($_POST['email']);
			}

			if(empty($_POST['website'])){
				$websiteErr = "website is required";
			}else {
				$website= test_input($_POST['website']);
			}

			if(empty($_POST['comment'])){
				$comment = "comment is required";
			}else {
				$comment= test_input($_POST['comment']);
			}

			if(empty($_POST['gender'])){
				$genderErr = "gender is required";
			}else {
				$gender= test_input($_POST['gender']);
			}

		}
		function test_input($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;

		}
	?>

	<h2>php form validation example</h2>
	<p><span class="error">* required field</span></p>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		Name : <input type="text" name="name">
		<span class="error">*<?php echo $nameErr; ?></span>
		<br><br>

		Email: <input type="text" name="email">
		<span class="error">*<?php echo $emailErr; ?></span>
		<br><br>

		Website: <input type="text" name="website">
		<span class="error">* <?php echo $websiteErr ?></span>
		<br><br>

		Comment: <textarea name="comment" rows="5" cols="50" ></textarea>
		<br><br>

		Gender:
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male"> Male
		<input type="radio" name="gender" value="other"> Other 
		<span class="error">* <?php echo $genderErr; ?></span>
		<br><br>

		<input type="submit" name="submit" value="submit">
	</form>

	<?php
	echo "<h2>Your Input:</h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;
	?>

</body>
</html>