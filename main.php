<?php
require __DIR__ . "/vendor/autoload.php";

use Models\{Farm, Chicken, Cow};

$farm = new Farm();

/**
 * добавить животных в хлев (10 коров и 20 кур)
 */
for ($i = 0; $i < 10; $i++) {
    $tempChicken = new Chicken();
    $farm->addNewPet($tempChicken);

    $tempChicken = new Chicken();
    $farm->addNewPet($tempChicken);

    $tempCow = new Cow();
    $farm->addNewPet($tempCow);
}

/**
 * Вывести на экран информацию о количестве каждого типа животных на ферме
 */
$farm->countPets();

/**
 * 7 раз (неделю) произвести сбор продукции (подоить коров и собрать яйца у кур)
 */
for($i=0;$i<7;$i++){
    $farm->harvestProducts();
}

/**
 * Вывести на экран общее кол-во собранных за неделю шт. яиц и литров молока
 */
$farm->countProduct();

/**
 * Добавить на ферму ещё 5 кур и 1 корову
 */
for ($i = 0; $i < 5; $i++) {
    $tempChicken = new Chicken();
    $farm->addNewPet($tempChicken);
}
$tempCow = new Cow();
$farm->addNewPet($tempCow);

/**
 * Снова вывести информацию о количестве каждого типа животных на ферме
 */
$farm->countPets();

/**
 * Снова 7 раз (неделю) производим сбор продукции и выводим результат на экран.
 */
for($i=0;$i<7;$i++){
    $farm->harvestProducts();
}
$farm->countProduct();