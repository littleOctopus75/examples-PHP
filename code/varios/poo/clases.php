<?php
	/**
	 * Definicion de una clase
	 */

	echo "Clase Employee <br>";

	class Employee
	{
		private $first_name;
		private $last_name;
		private $age;
		
		public function __construct($first_name, $last_name, $age)
		{
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->age = $age;
		}
		public function getFirstName()
		{
			return $this->first_name;
		}
		public function getLastName()
		{
			return $this->last_name;
		}
		public function getAge()
		{
			return $this->age;
		}
	}
		

	/**
	 * Objetos
	 */
	
	echo "Objetos <br>";

	echo "Uno: <br>";
	$objEmployeeOne = new Employee('Bob', 'Smith', 30);
	echo $objEmployeeOne->getFirstName()."<br>"; // prints 'Bob' 
	echo $objEmployeeOne->getLastName()."<br>"; // prints 'Smith' 
	echo $objEmployeeOne->getAge()."<br>"; // prints '30' 
	echo var_dump($objEmployeeOne)."<br>";
	echo "<br>";
	echo "Dos: <br>";
	$objEmployeeTwo = new Employee('John', 'Smith', 34);
	echo $objEmployeeTwo->getFirstName()."<br>"; // prints 'John' 
	echo $objEmployeeTwo->getLastName()."<br>"; // prints 'Smith' 
	echo $objEmployeeTwo->getAge()."<br>"; // prints '34'
	echo var_dump($objEmployeeTwo)."<br>";
	echo "<br>";

?>