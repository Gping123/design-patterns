<?php

use Src\Composite\Employee;

require_once __DIR__ . '/../vendor/autoload.php';


(function(){

    $ceo = new Employee('John', 'CEO', 300000);
    // 销售主管
    $headSales = new Employee('Robert', 'Head Sales', 200000);
    // 营销主管
    $headMarketing = new Employee('Michel', 'Head Marketing', 200000);
    // 文员
    $clerk1 = new Employee('Laura', 'Marketing', 100000);
    $clerk2 = new Employee('Bob', 'Marketing', 100000);
    // 营销员
    $salesExecutive1 = new Employee('Richard', 'Sales', 100000);
    $salesExecutive2 = new Employee('Rob', 'Sales', 100000);

    $ceo->add($headSales);
    $ceo->add($headMarketing);

    $headSales->add($salesExecutive1);
    $headSales->add($salesExecutive2);

    $headMarketing->add($clerk1);
    $headMarketing->add($clerk2);

    echo $ceo.PHP_EOL;
    
    foreach($ceo->getSubordinates() as $headEmployee) {
        /**
         * @var Employee $headEmployee
         */
        echo $headEmployee.PHP_EOL;

        foreach($headEmployee->getSubordinates() as $employee) {
            /**
             * @var Employee $employee
             */
            echo $employee.PHP_EOL;
        }

    }
    

})();
