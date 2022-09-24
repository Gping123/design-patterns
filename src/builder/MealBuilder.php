<?php

namespace Src\Builder;

class MealBuilder 
{
    /**
     * prepareVegMeal function
     * 素食套餐
     *
     * @return Meal
     */
    public function prepareVegMeal() : Meal
    {
        $meal = new Meal();
        $meal->setItem(new VegBurger());
        $meal->setItem(new Coke());
        return $meal;
    }


    /**
     * prepareNonVegMeal function
     * 荤食套餐
     *
     * @return Meal
     */
    public function prepareNonVegMeal() : Meal
    {
        $meal = new Meal();
        $meal->setItem(new ChickenBurger());
        $meal->setItem(new Pepsi());
        return $meal;
    }

}

