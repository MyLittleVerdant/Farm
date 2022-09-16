<?php

namespace Models;

class Pet
{
    protected string $id;
    protected string $type;

    function __construct($type)
    {
        static $count = 0;
        $this->id = uniqid($type . "_");
        $this->type = $type;
        $count++;
    }

    public function getType(): string
    {
        return $this->type;
    }

}

