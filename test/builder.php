<?php

use Src\Builder\MealBuilder;

require_once __DIR__ . '/../vendor/autoload.php';

(function(){
    $mealBuilder = new MealBuilder();

    $meal = $mealBuilder->prepareVegMeal();
    echo 'veg meal'.PHP_EOL;
    $meal->showItem();
    echo 'Total Cost : ' . $meal->getCost().PHP_EOL;

    $meal = $mealBuilder->prepareNonVegMeal();
    echo 'NonVeg Meal'.PHP_EOL;
    $meal->showItem();
    echo 'Total Cost : ' . $meal->getCost().PHP_EOL;


})();
