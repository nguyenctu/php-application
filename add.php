
<?php
	$username = "dtdm";
	$password = "dtdm";
	$db = "dtdm";
	$mysqli = new mysqli("localhost",$username,$password,$db);

	// Check connection
	if ($mysqli->connect_errno) {
  		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  		exit();
	}

	if (isset($_POST["submit"])) {
		$hoten = $_POST["hoten"];
		$chucvu = $_POST["chucvu"];
		$query = ("INSERT INTO thanhvien(hoten,chucvu) VALUES('" . $hoten . "','" . $chucvu . "')");
		if(mysqli_query($mysqli, $query)) {
			echo "Thêm thành viên thành công";?>
			<button>
				<a href="index.php">Tro ve danh sach</a>
			</button>
<?php
			die();
		} else {
			echo "Thêm thành viên không thành công. Vui lòng thử lại!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Thêm thành viên</title>
</head>
<body>
	<h2 style="color: red;">Thêm thành viên công ty</h2>
	<form action="add.php" method="post">
		<label>Họ tên:</label> <br/>
		<input type="text" name="hoten"> <br/><br/>
		<label>Chức vụ:</label> <br/>
		<input type="text" name="chucvu"> <br/><br/>
		<input type="submit" name="submit" value="Tạo">
	</form>
</body>
</html>