<!DOCTYPE html>
<html>
<head>
	<title>Form nhập thông tin</title>
</head>
<body>
	<h1>Form nhập thông tin</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="name">Họ và tên:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="email">Địa chỉ email:</label>
		<input type="email" id="email" name="email"><br><br>
		<input type="submit" value="Submit">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$email = $_POST['email'];
		echo "<h2>Chào bạn ".$name.", email của bạn là ".$email.".</h2>";
	}
	?>
</body>
</html>
