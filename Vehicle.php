<?php

class Vehicle
{
    private int $numberOfWheels;
    private int $numberOfSeats;
    private ?string $brand;
    private ?string $color;
    protected bool $isTankEmpty = false;
    protected bool $isStarted = true;
    public ?string $start;
    public ?string $stop;

    function setnumberOfWheels($numberOfWheels)
    {
        $this->numberOfWheels = $numberOfWheels;
    }

    function getnumberOfWheels()
    {
        return $this->numberOfWheels;
    }

    function setnumberOfSeats($numberOfSeats)
    {
        $this->numberOfSeats = $numberOfSeats;
    }

    function getnumberOfSeats()
    {
        return $this->numberOfSeats;
    }

    function setBrand($brand)
    {
        $this->brand = $brand;
    }

    function getBrand()
    {
        return $this->brand;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function getColor()
    {
        return $this->color;
    }
function setStart($start){
        $this->start = $start;
        if($this->isTankEmpty === true) echo "Vozilo nije moguce pokrenuti,nema goriva  " ;
    if($this->isStarted === true) echo "Vozilo je vec startovano  ";
    if($this->isStarted === false && $this->isTankEmpty === false) echo  "Vozilo je uspjesno startovano  ";
}
function getStart(){
        return $this->start;
}

function setStop($stop) {
        $this->stop = $stop;
    if($this->isStarted === false) echo "Vozilo je vec iskljuceno  ";
    if($this->isStarted === true) echo "Vozilo je uspjesno iskljuceno  ";
}
function getStop (){
        return $this->stop;
}

}
class Car extends Vehicle {
   // private bool $isTankEmpty = true;
    //private bool $isStarted = false;




    public function printCarDescription(){
        echo "<br>";
        echo "This car has: {$this->getnumberOfWheels()} wheels<br>";

        echo "This car has: {$this->getnumberOfSeats()} seats<br>";

        echo "Brand of this car is: {$this->getBrand()}<br>";

        echo "Color of this car is: {$this->getColor()}<br>";

        echo " {$this->getStart()}<br>";

        //echo "<br>";

        echo "{$this->getStop()}<br>";
        // echo "Car is:  {$this->getStart()}<br>";    isTankEmpty
    }
}
$car = new Car();
$car->setnumberOfWheels(4);
$car->setnumberOfSeats(5);
$car->setBrand("Volvo");
$car->setColor("Gray");
$car->setStart("");
$car->setStop("");



$car->printCarDescription();






class Truck extends Car {
    //private bool $isTankEmpty = true;
  //  private bool $isStarted = false;


    public function printTruckDescription(){
        echo "<br>";
        echo "This truck has: {$this->getnumberOfWheels()} wheels<br>";

        echo "This truck has: {$this->getnumberOfSeats()} seats<br>";

        echo "Brand of this truck is: {$this->getBrand()}<br>";

        echo "Color of this truck is: {$this->getColor()}<br>";

        echo " {$this->getStart()}<br>";

       // echo "Truck is:  {$this->isStarted}<br>";
    }
}
$truck = new Truck();
$truck->setnumberOfWheels(4);
$truck->setnumberOfSeats(2);
$truck->setBrand("Man");
$truck->setColor("White");
$truck->setStart("");


$truck->printTruckDescription();