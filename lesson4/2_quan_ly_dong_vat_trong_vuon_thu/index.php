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

    // Lớp trừu tượng Animal chứa các thuộc tính và phương thức chung cho động vật
    abstract class Animal
    {
        protected $name;
        protected $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        // Phương thức trừu tượng bắt buộc các lớp con phải triển khai
        abstract public function makeSound();
        abstract public function move();
    }

    // Interface Playable định nghĩa hành vi chơi đùa cho động vật
    interface Playable
    {
        public function play();
    }

    // Lớp Dog kế thừa Animal và triển khai Playable
    class Dog extends Animal implements Playable
    {
        public function makeSound()
        {
            echo "{$this->name} says Woof!<br>";
        }

        public function move()
        {
            echo "{$this->name} is running.<br>";
        }

        public function play()
        {
            echo "{$this->name} is playing fetch.<br>";
        }
    }

    // Lớp Cat kế thừa Animal và triển khai Playable
    class Cat extends Animal implements Playable
    {
        public function makeSound()
        {
            echo "{$this->name} says Meow!<br>";
        }

        public function move()
        {
            echo "{$this->name} is sneaking around.<br>";
        }

        public function play()
        {
            echo "{$this->name} is playing with a ball of yarn.<br>";
        }
    }

    // Lớp Bird kế thừa Animal và triển khai Playable
    class Bird extends Animal implements Playable
    {
        public function makeSound()
        {
            echo "{$this->name} says Chirp!<br>";
        }

        public function move()
        {
            echo "{$this->name} is flying.<br>";
        }

        public function play()
        {
            echo "{$this->name} is playing with feathers.<br>";
        }
    }

    // Khởi tạo đối tượng và gọi các phương thức
    $dog = new Dog("Buddy", 3);
    $cat = new Cat("Whiskers", 2);
    $bird = new Bird("Tweety", 1);

    $dog->makeSound();
    $dog->move();
    $dog->play();

    $cat->makeSound();
    $cat->move();
    $cat->play();

    $bird->makeSound();
    $bird->move();
    $bird->play();
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