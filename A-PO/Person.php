<?php

class Person
{
    protected $name;

    protected $phone;

    protected $EGN;

    private static $number = 10000000;

    protected $sentProtocols;

    protected $receivedProtocols;

    protected $shipments;

    /**
     * Person constructor.
     * @param $name
     * @param $phone
     * @param $EGN
     */
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->EGN = self::$number + rand(100, 1000);
        $this->sentProtocols = [];
        $this->receivedProtocols = [];
        $this->shipments = [];
    }

    public function addSentProtocol(Protocol $protocol)
    {
        $this->sentProtocols[] = $protocol;
    }


}