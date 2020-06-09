<?php
	if (isset($_GET["id"])) {
		$id = $_GET["id"];

		$username = "dtdm";
		$password = "dtdm";
		$db = "dtdm";
		$mysqli = new mysqli("localhost",$username,$password,$db);

		// Check connection
		if ($mysqli->connect_errno) {
	  		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	  		exit();
		}

		$query = "DELETE FROM thanhvien WHERE id = " . $id;
		if(mysqli_query($mysqli, $query)) {
			echo "Xóa thành viên thành công";?>
			<button>
				<a href="index.php">Tro ve danh sach</a>
			</button>
<?php
		};

	}

?>