<?php 

class Compute{
	
	private $width ;
	private $length ;

	function __construct($w, $h)
	{
		$this->width = $w;
		$this->length = $h;

	}
	
	function getWidth(){
		return $this->width;
	}

	function getLength(){
		return $this->length;
	}	

	function calcArea(){
		return $area = $this->width * $this->length;
	}

	function calcPerimeter(){
		return $perimeter = ($this->width + $this->length) *2;
	}

	function isSquare(){
		if($this->width == $this->length){
			return true;
		}
		return false;
		
	}

}

 ?>