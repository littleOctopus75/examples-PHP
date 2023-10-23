<?php
    /**
     * Encaptulado
     */
    echo "Encapsulado <br>";
    
    class Person_public
    {
        public $name;
        public function getName()
        {
            return $this->name;
        }
    }
    $person = new Person_public();
    $person->name = 'Bob Smith';
    echo $person->getName()."<br>"; // prints 'Bob Smith'

    class Person_private
    {
        private $name;
        public function getName()
        {
            return $this->name;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
    }
    $person = new Person_private();
    //$person->name = 'Bob Smith'; // Throws an error 
    $person->setName('Bob Smith');
    echo $person->getName()."<br>"; // prints 'Bob Smith'

    echo "<br>";

    /**
     * Herencia
     */
    echo "Herencia <br>";
    echo "<br>";
    class Person
    {
        protected $name;
        protected $age;
        public function getName()
        {
            return $this->name;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
        private function callToPrivateNameAndAge()
        {
            return "{$this->name} is {$this->age} years old.";
        }
        protected function callToProtectedNameAndAge()
        {
            return "{$this->name} is {$this->age} years old.";
        }
    }
    class Employee_herencia extends Person
    {
        private $designation;
        private $salary;
        public function getAge()
        {
            return $this->age;
        }
        public function setAge($age)
        {
            $this->age = $age;
        }
        public function getDesignation()
        {
            return $this->designation;
        }
        public function setDesignation($designation)
        {
            $this->designation = $designation;
        }
        public function getSalary()
        {
            return $this->salary;
        }
        public function setSalary($salary)
        {
            $this->salary = $salary;
        }
        public function getNameAndAge()
        {
            return $this->callToProtectedNameAndAge();
        }
    }
    $employee = new Employee_herencia();
    $employee->setName('Bob Smith');
    $employee->setAge(30);
    $employee->setDesignation('Software Engineer');
    $employee->setSalary('30K');
    echo $employee->getName()."<br>"; // prints 'Bob Smith' 
    echo $employee->getAge()."<br>"; // prints '30' 
    echo $employee->getDesignation()."<br>"; // prints 'Software Engineer' 
    echo $employee->getSalary()."<br>"; // prints '30K' 
    echo $employee->getNameAndAge()."<br>"; // prints 'Bob Smith is 30 years old.' 
    //echo $employee->callToPrivateNameAndAge(); // produces 'Fatal Error'
    echo "<br>";

    /**
     * Polimorfismo
     */
    echo "Polimorfismo <br>";
    class Message
    {
        public function formatMessage($message)
        {
            return printf("<i>%s</i><br>", $message);
        }
    }
    class BoldMessage extends Message
    {
        public function formatMessage($message)
        {
            return printf("<b>%s</b><br>", $message);
        }
    }
    $message = new Message();
    $message->formatMessage('Hello World'); // prints '<i>Hello World</i>' 
    $message = new BoldMessage();
    $message->formatMessage('Hello World'); // prints '<b>Hello World</b>' 
        
    echo "<br>";
?>