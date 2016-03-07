<?php

class Employee extends Person
{
    private $type;

    private $office;

    /**
     * Employee constructor.
     * @param string $name
     * @param string $phone
     * @param $EGN
     * @param $type
     */
    public function __construct($name, $phone, $office, $type)
    {

        parent::__construct($name, $phone);
        $this->office = $office;
        $this->type = $type;
    }


}