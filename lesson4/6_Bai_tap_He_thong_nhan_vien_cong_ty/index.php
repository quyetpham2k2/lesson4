<?php echo
	'<div class="container" style="

		padding: 16px;
		max-width: 700px;
		margin: 100px auto;
		border: 3px solid black;
	">';
try {
	//  display ============================================================================================

	// NOTE: code viết ở đây :)
	require_once "Manager.php";
	require_once "Developer.php";
	require_once "Designer.php";

	// Khởi tạo đối tượng
	$employees = [
		new Manager("Alice", 10000),
		new Developer("Bob", 8000),
		new Designer("Charlie", 7000),
	];

	// Hiển thị thông tin và thực hiện các hành động
	foreach ($employees as $employee) {
		echo $employee->getInfo() . "<br>";
		echo "Work: " . $employee->work() . "<br>";
		echo "Bonus: " . $employee->calculateBonus() . "<br>";
		echo "---------------------------<br>";
	}

	// ============================================================================================
} catch (Error $e) {
	// } catch (Exception $e) {

	echo ' <br />
	<strong>
		Caught exception: ', $e->getMessage(), "
	</strong>
	<br />";

} finally {// không đặt cũng được, nhưng đặt finnally cho chắc :)
	echo '<a style="
		display: block;
		text-align: center;
		border: 1px solid black;
		text-decoration: none;
		color: black;
		font-weight: bold;
		margin-top: 16px;
		padding: 8px;
	" href="../">
		Trang chủ
	</a>';
}
echo '
</div>';
?>