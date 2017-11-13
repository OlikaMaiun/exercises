<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 13.11.2017
 * Time: 17:30
 */

class Worker1
{
    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}
$worker1 = new Worker1("Dima", 25, 1000);
echo $worker1->getAge() * $worker1->getSalary();