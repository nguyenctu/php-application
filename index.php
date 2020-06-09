
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

	$list = $mysqli->query("SELECT * FROM thanhvien");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Danh sách thành viên công ty</title>
</head>
<body>
	<h2 style="color: red;">Danh sách thành viên công ty</h2>
	<button>
		<a href="add.php">Thêm</a>
	</button>
	<br/>
	<br/>
	<table border="1">
		<thead>
			<th>Họ tên</th>
			<th>Chức vụ</th>
			<th>Hành động</th>
		</thead>
		<?php
			while ($row = $list->fetch_assoc()) {
    	?>
    	<tr>
			<td><?php echo $row["hoten"]; ?></td>
			<td><?php echo $row["chucvu"]; ?></td>
			<td>
				<button>
					<a href="delete.php?id=<?php echo $row["id"]; ?>">Xóa</a>
				</button>
			</td>
		</tr>
    	<?php
 			}
 			$list->free();
 			$mysqli->close();
		?>
	</table>
</body>
</html>
