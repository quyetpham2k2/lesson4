<?php
require_once "Employee.php";
require_once "Workable.php";
class Designer extends Employee implements Workable
{
    public function calculateBonus()
    {
        return $this->salary * 0.15;
    }

    public function work()
    {
        return "Thiết kế giao diện.";
    }
}