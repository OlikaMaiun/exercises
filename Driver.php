<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 13.11.2017
 * Time: 18:34
 */
require_once ("Worker.php");
class Driver extends Worker
{
    private $drivingExperience;
    private $category;

    public function getDrivingExperience()
    {
        return $this->drivingExperience;
    }
    public function setDrivingExperience($drivingExperience)
    {
        $this->drivingExperience = $drivingExperience;
    }

    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        if ($this->checkCategory($category) == $category) {
            $this->category = $category;
        }
    }
    private function checkCategory($category){
        if ($category == "A" || $category == "B" || $category == "C"){
            $this->category = $category;
        } else{
            $this->category = false;
        }
    }
}
$driver1 = new Driver();
$driver1->setName('Ros');
$driver1->setCategory("B");
echo "Driver name:{$driver1->getName()}. " . "Driver category: {$driver1->getCategory()}. ";