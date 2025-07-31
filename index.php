<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);
 
class Fruit
{
	public function getType() {
		return "Fruit";
	}
}

class Apple extends Fruit
{
	public function getName() {
		return "Apple";
	}
}

class Mango extends Fruit
{
	public function getName() {
		return "mango";
	}
}
 
$apple = new Apple();
$mango = new Mango();

echo "This is ". $apple->getName(). ' and types is '.$apple->getType();
echo "<Br>";
echo "This is ". $mango->getName(). ' and types is '.$mango->getType();
echo "<hr><br><br>";


class Tata
{

	public $cartName = '';
	public $carPrice = '';
	public $comOwner;
	public function __construct($carName, $carPrice, $comOwner) {
		$this->cartName = $carName;
		$this->carPrice = $carPrice;
		$this->comOwner = $comOwner;
	}

	public function getCompany(){
		return "Tata.";
	}

	public function getColur() 
	{
		return "Black";
	}

	public function getCarName()
	{
		return $this->cartName;
	}

	public function getCarPrice()
	{
		return $this->carPrice;
	}
	public function getOwner()
	{
		return $this->comOwner;
	}	
}
class Punch extends Tata
{
	public function __construct($carName, $carPrice, $comOwner) {
		parent::__construct($carName, $carPrice, $comOwner);
	}
}
 
class Harriar extends Tata
{
	public function __construct($carName, $carPrice, $comOwner) {

		parent::__construct($carName, $carPrice, $comOwner);
	}
	public function getColur() {
		return "Blue";

	}
}
class Nano extends Tata
{
	public function __construct($carName, $carPrice, $comOwner) {
		parent::__construct($carName, $carPrice, $comOwner);
	}

	public function getColur() {
		return "White";
	}

}
 
$punch = new Punch('punch', '100000', 'ratan tata');
$harriar = new Harriar('harriar', '1500000', 'ratan tata');
$nano = new Nano('namo', '700000', 'ratan tata');
 
echo "This is ".$punch->getCarName()." is colur ".$punch->getColur().' and this company name is '.$punch->getCompany();echo "this price is".$punch->getCarPrice();
echo "<br>";

echo "This is ".$harriar->getCarName()." is colur ".$harriar->getColur().' and this company name is '.$harriar->getCompany();echo "this price is".$harriar->getCarPrice();
echo "<br>";

echo "This is ".$nano->getCarName()." is colur ".$nano->getColur().' and this company name is '.$nano->getCompany();echo "this price is".$nano->getCarPrice();
echo "<br>";

echo "This company owner is".$harriar->getOwner();