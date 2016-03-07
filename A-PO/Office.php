<?php

class Office
{
    private $name;

    private $type;

    private $employees;

    private $sentProtocols;

    private $receivedProtocols;

    /**
     * Office constructor.
     * @param $name
     * @param $employees
     * @param $sentProtocols
     * @param $receivedProtocols
     */
    public function __construct($name, $type = null)
    {
        $this->name = $name;
        $this->employees = [];
        $this->sentProtocols = [];
        $this->receivedProtocols = [];
    }
    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    /**
     * @return array
     */
    public function getEmployees()
    {
        return $this->employees;
    }


}