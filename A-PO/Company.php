<?php

class Company
{
    private static $instance;

    private $offices;

    private $employees;

    private $shipments;

    /**
     * Company constructor.
     */
    public function __construct()
    {
        self::initOffices();
        self::initEmployees();

        $this->shipments = [];
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function initOffices()
    {
        $this->offices[] = new Office('Veliko Tyrnovo', 'HQ');
        $this->offices[] = new Office('Sofia');
        $this->offices[] = new Office('Ruse');
        $this->offices[] = new Office('Plovdiv');
        $this->offices[] = new Office('Varna');
    }

    private function initEmployees()
    {
        $this->addEmployee('VT', 123456, $this->offices[0], 'clerk');
        $this->addEmployee('CA C', 123456, $this->offices[1], 'clerk');
        $this->addEmployee('CA T', 123456, $this->offices[1], 'transport');
        $this->addEmployee('P C', 123456, $this->offices[2], 'clerk');
        $this->addEmployee('P T', 123456, $this->offices[2], 'transport');
        $this->addEmployee('PB C', 123456, $this->offices[3], 'clerk');
        $this->addEmployee('PB T', 123456, $this->offices[3], 'transport');
        $this->addEmployee('B C', 123456, $this->offices[4], 'clerk');
        $this->addEmployee('B T', 123456, $this->offices[4], 'transport');
    }

    private function addEmployee($name, $phone, $office, $type)
    {
        $employee = new Employee($name, $phone, $office, $type);
        $this->employees[] = $employee;
        $office->addEmployee($employee);
    }

    /**
     * @return mixed
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * @return mixed
     */
    public function getOffices()
    {
        return $this->offices;
    }


}