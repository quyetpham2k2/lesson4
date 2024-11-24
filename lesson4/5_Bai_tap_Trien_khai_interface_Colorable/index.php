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

    /**
     * Created by PhpStorm.
     * User: dungduong
     * Date: 11/21/18
     * Time: 17:17
     */
    include_once('Circle.php');
    include_once('Cylinder.php');
    include_once('Rectangle.php');
    include_once('Square.php');

    $circle = new Circle('Circle 01', 3);
    echo 'Circle area: ' . $circle->calculateArea() . '<br />';
    echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

    $cylinder = new Cylinder('Cylinder 01', 3, 4);
    echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
    echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

    $rectangle = new Rectangle('Rectangle 01', 3, 4);
    echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

    $square = new Square('Square 01', 4, 4, 4);
    echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';

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