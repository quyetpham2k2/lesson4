<?php
echo
    '<div class="container" style="

		padding: 16px;
		max-width: 700px;
		margin: 100px auto;
		border: 3px solid black;
	">';
try {
    //  display ============================================================================================

    // NOTE: code viết ở đây :)
    include('Animals/Chicken.php');
    include('Animals/Tiger.php');
    include('Fruits/Apple.php');
    include('Fruits/Orange.php');

    echo ('---- Animals<br>');
    $animals[0] = new Tiger();
    $animals[1] = new Chicken();

    foreach ($animals as $animal) {
        echo $animal->makeSound() . '<br>';

        if ($animal instanceof Chicken) {
            echo $animal->howToEat() . '<br>';
        }
    }

    echo ('---- Fruits<br>');
    $fruits[0] = new Apple();
    $fruits[1] = new Orange();

    foreach ($fruits as $fruit) {
        echo $fruit->howToEat() . '<br>';
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
