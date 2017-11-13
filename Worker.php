<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 13.11.2017
 * Time: 17:11
 */
require_once ("User.php");
class Worker extends User
{
    private $salary;


//    private function checkAge($age){
//        if ($age>=1 && $age<=100){
//            return true;
//        } else{
//            return false;
//        }
//    }
//
//    public function setAge($age)
//    {
//        if($this->checkAge($age)) {
//            $this->age = $age;
//        }
//    }
//    public function getAge()
//    {
//        return $this->age;
//    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}
$worker1 = new Worker();
$worker1->setName("Ivan");
$worker1->setAge(25);
$worker1->setSalary(1000);
$worker2 = new Worker();
$worker2->setName("Vasia");
$worker2->setAge(26);
$worker2->setSalary(2000);


//echo $worker1->getSalary() + $worker2->getSalary(). "\n";
//echo $worker1->getAge() + $worker2->getAge(). "\n";