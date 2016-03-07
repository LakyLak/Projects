<?php

require_once 'autoload.php';

class Protocol
{
    private $number;

    private $from;

    private $to;

    private $items;

    private static $currentNumber = 1;

    /**
     * Protocol constructor.
     * @param $from
     * @param $to
     * @param $items
     */
    public function __construct($from, $to)
    {
        $this->number = self::$currentNumber++;
        $this->from = $from;
        $this->to = $to;
        $this->items = [];
    }

}
/*$c = new Customer('name', 123456789, 123456789, 'address');
var_dump($c);

$p = new Protocol($c, $c);
var_dump($p);
$p2 = new Protocol($c, $c);
var_dump($p2);*/
