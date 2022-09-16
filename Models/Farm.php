<?php

namespace Models;

class Farm
{
    private array $pets;
    private array $products;

    public function addNewPet($pet)
    {
        if (!empty($pet)) {
            $this->pets[$pet->getType()][] = $pet;
        }
    }

    public function harvestProducts()
    {
        foreach ($this->pets as $type => $corral) {
            foreach ($corral as $pet) {
                $product = $pet->harvest();
                if (empty($this->products[$product['type']])) {
                    $this->products[$product['type']] = $product['product'];
                } else {
                    $this->products[$product['type']] += $product['product'];
                }

            }
        }
    }

    public function countProduct()
    {
        foreach ($this->products as $type => $product) {
            echo "Продукта типа '$type' собрано: $product\n";
            echo "<br>";
        }
    }

    public function countPets()
    {

        foreach ($this->pets as $type => $pets) {
            echo "Животных типа '$type': " . count($pets) . "\n";
            echo "<br>";
        }
    }

}