<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 13.11.2017
 * Time: 18:20
 */
require_once ("User.php");
class Student extends User
{
    private $stipend;
    private $course;

    public function getStipend(){
        return $this->stipend;
    }
    public function setStipend($stipend){
        $this->stipend = $stipend;
    }

    public function getCourse(){
        return $this->course;
    }
    public function setCourse($course){
        $this->course = $course;
    }

    function __construct($course, $stipend)
    {
        $this->course = $course;
        $this->stipend = $stipend;
    }

}
$student1 = new Student( 6, 1670);
$student1->setName("Olha");
echo $student1->getStipend();
echo $student1->getName();