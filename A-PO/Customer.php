<?php

class Customer extends Person
{
    private $address;

    /**
     * Customer constructor.
     * @param string $name
     * @param string $phone
     * @param $EGN
     * @param $address
     */
    public function __construct($name, $phone, $city, $street, $no, $other= null)
    {
        parent::__construct($name, $phone);
        $this->address = [$city, $street, $no, $other= null];
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function sendItem(Customer $to, $content, Employee $accepted)
    {
        $shipment = new Item($this, $to, $content)
        $protocol = new Protocol($this, $accepted);
        $this->addSentProtocol($protocol);
        $to->addSentProtocol($protocol);
        //Customer $from, Customer $to, $content
    }

}