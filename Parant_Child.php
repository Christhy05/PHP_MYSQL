<?php
    class Employee{
        public $empID;
        public $field;
        public function __construct($empID,$field){
            $this->empID = $empID;
            $this->field = $field;
        }
    }
    class TechLead extends Employee{
        public $role;
        public function __construct($empID, $field,$role){
            parent::__construct($empID,$field);
            $this->role = $role;
        }
        public function Details(){
            echo 'Employee : '.$this->empID.'<br>';
            echo 'Field    : '.$this->field.'<br>';
            echo 'Role     : '.$this->role;
        }
    }
    $obj = new TechLead('E001','ICT','Lecturer');
    $obj->Details();

?>