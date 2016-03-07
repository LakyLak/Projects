<?php

class Item
{
    private $id;

    private $from;

    private $to;

    private $content;

    private static $number = 1000;

    private $status;

    private $protocols;

    /**
     * Item constructor.
     * @param $from
     * @param $to
     * @param $content
     * @param $id
     * @param $status
     * @param $protocols
     */
    public function __construct(Customer $from, Customer $to, $content)
    {
        $this->from = $from->getAddress();
        $this->to = $to->getAddress();
        $this->content = $content;
        $this->id = ++self::$number;
        $this->status = 'status';
        $this->protocols = [];
    }


}

/*$i = new Item('From', 'To', 'content');
var_dump($i);*/