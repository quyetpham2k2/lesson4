<?php
abstract class Employee
{
    protected $name;
    protected $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    abstract public function calculateBonus();

    public function getInfo()
    {
        return "Name: {$this->name}, Salary: {$this->salary}";
    }
}
?>