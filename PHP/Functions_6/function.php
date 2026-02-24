<?php

	class car{

				public $color;
				public $model;
			
				public function__construct($color,$model)
				{
					$this->color=$color;
					$this->model=$model;


				}
		
				public function message()
				{

					return "my car is a".$this->color." ".$this->model."!";
				}


	}

	    $mycar =new car("black","Volvo");

		echo $mycar->message();

		echo"<br>";

		$mycar=new car("red","Toyota")
		
		echo $mycar->message();
?>