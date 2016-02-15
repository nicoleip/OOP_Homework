<?php

class Car
{
	private $model;
	
	private $maxSpeed;
	
	private $color;
	
	private $isSportCar;
	
	private $price;	
	
	private $owner; 
	
	public function __construct($model, $price, $isSportCar, $color, $maxSpeed, Person $owner = null)
	{
		$this->model = $model;
		$this->price = $price;
		$this->isSportCar = $isSportCar;		
		if($this->isSportCar == true){
		 $this->maxSpeed = $maxSpeed;
		}else{
			if($maxSpeed < 200){
				$this->maxSpeed = $maxSpeed;
			}else{
				$this->maxSpeed = 200;
			}
		}		
		$this->color = $color;	
		$this->owner = $owner;
	}

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function getModel()
	{
		return $this->model;
	}
	
	public function setMaxSpeed($maxSpeed)
	{
		$this->maxSpeed = $maxSpeed;
	}
	
	public function getMaxSpeed()
	{
		return $this->maxSpeed;
	}
	
	public function setColor($color)
	{
		$this->color = $color;
	}
	
	public function getColor()
	{
		return $this->color;
	}
	
	public function setPrice($price)
	{
		$this->price = $price;
	}
	
	public function getPrice()
	{
		return $this->price;
	}	
	
	public function getSpecifics()
	{
		if($this->isSportCar){
			return 'a sport car';			
		}else{
			return 'not a sport car';
		}
	}
	
	public function setSpecifics($isSportCar)
	{
		$this->isSportCar = $isSportCar;
	}
	
	public function setOwner(Person $owner)
	{
		$this->owner = $owner;
	}
	
	public function getOwner()
	{
		return $this->owner;
	}
	
	public function changeOwner(Person $owner){		
		$this->owner = $owner;
		
	}
	
	public function isMoreExpensive(Car $otherCar)
	{
		if($this->price > $otherCar->price){
			return ' The first car is more expensive';
		}else if($this->price < $otherCar->price){
			return ' The second car is more expensive';
		}else{
			return ' The price is equal';
		}
	}
	
	public function calculatePriceForScrap($metalPrice)
	{
		$coeff = 0.2;
		if($this->isSportCar == true){
			$coeff += 0.05;
		}else if($this->color == 'black' || $this->color == 'white'){
			$coeff += 0.05;
		}
		$finalPrice = $metalPrice*$coeff;
		return $finalPrice;
	}
	
	
	
	public function getInfo()
	{
		return sprintf(
				'Model: %s, Max Speed: %d km/h, Color: %s, Price: %d, Specifics: %s',
				$this->getModel(),
				$this->getMaxSpeed(),
				$this->getColor(),
				$this->getPrice(),
				$this->getSpecifics()
			
			);
	}
}