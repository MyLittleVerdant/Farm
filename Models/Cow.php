<?php

namespace Models;

class Cow extends Pet
{
    function __construct()
    {
        static $count = 0;
        $this->id = uniqid("корова" . "_");
        $this->type = "корова";
        $count++;
    }

    public function harvest(): array
    {
        return ['type'=>"яйца",'product' => rand(8, 12)];
    }

}