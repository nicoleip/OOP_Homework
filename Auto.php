<?php
class Auto
{
	private $model;

	private $maxSpeed;

	private $currentSpeed;

	private $color;

	private $currentGear;
	
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

	public function setCurrentSpeed($currentSpeed)
	{
		$this->currentSpeed = $currentSpeed;
	}

	public function getCurrentSpeed()
	{
		return $this->currentSpeed;
	}

	public function setColor($color)
	{
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	}

	public function setCurrentGear($currentGear)
	{
		$this->currentGear = $currentGear;
	}

	public function getCurrentGear()
	{
		return $this->currentGear;
	}

	public function accelerate($speed)
	{
		$this->currentSpeed = $speed;
		if ($this->currentSpeed > $this->maxSpeed) {
			$this->currentSpeed = $this->maxSpeed;
		}
	}

	public function changeGearUp()
	{
		$this->currentGear += 1;
		if ($this->currentGear > 5) {
			$this->currentGear = 5;
		}
	}

	public function changeGearDown()
	{
		$this->currentGear -= 1;
		if ($this->currentGear < 1) {
			$this->currentGear = 1;
		}
	}

	public function changeGear($nextGear)
	{
		if($nextGear < 1 || $nextGear > 5){
			$this->currentGear;
		}else{
			$this->currentGear = $nextGear;
		}
	}

	public function changeColor($newColor)
	{
		$this->color = $newColor;
	}

	public function getInfo()
	{
		return sprintf(
				'%s , %d km/h, %d km/h, %s, %d ',
				$this->getModel(),
				$this->getMaxSpeed(),
				$this->getCurrentSpeed(),
				$this->getColor(),
				$this->getCurrentGear()
			);
	}
}