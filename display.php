<?php

require_once('compute.php'); 


class Display extends Compute{
	function __construct($w, $h)
	{
		Parent::__construct($w, $h);
		$this->automate($w, $h);
	}

	function displayWidth(){
		echo "Width is ".$this->getWidth();
	}

	function displaylength(){
		echo "Length is ".$this->getLength();
	}

	function displayPerimeter(){
		echo "Perimeter = ".$this->calcPerimeter();
	}

	function displayArea(){
		echo "Perimeter = ".$this->calcArea();
	}

	function automate(){
		
		$this->displayWidth();
		echo "<br>";
		$this->displayLength();
		echo "<br>";
		$this->displayArea();
		echo "<br>";
		$this->displayPerimeter();
		echo "<br>";
		if ($this->isSquare()) {
			echo "This shape is Square";
		} else {
			echo "This shape is Rectangle";
		}
		echo "<br>";
		echo "<br>";
	}

}

// $see = new Display(22, 43);
// $sd = new Display(44, 44);

 ?>