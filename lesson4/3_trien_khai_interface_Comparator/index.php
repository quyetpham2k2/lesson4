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
    include "ComparableCircle.php";

    $circleOne = new ComparableCircle('circleOne', 8);
    $circleTwo = new ComparableCircle('circleTwo', 2);
    $circleThree = new ComparableCircle('circleThree', 4);

    $test = $circleOne->compareTo($circleTwo);
    echo ('Comparable: <br>');
    echo $test;

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