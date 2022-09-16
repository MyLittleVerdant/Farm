<?php

namespace Models;

class Chicken extends Pet
{
    function __construct()
    {
        static $count = 0;
        $this->id = uniqid("курица" . "_");
        $this->type = "курица";
        $count++;
    }

    public function harvest(): array
    {
        return ['type'=>"молоко",'product' => rand(0, 1)];
    }

}