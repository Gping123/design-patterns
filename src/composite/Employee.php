<?php

namespace Src\Composite;

/**
 * Employee class
 * 员工类
 */
class Employee
{
    /**
     * name variable
     * 名称
     * @var string
     */
    private $name;

    /**
     * dept variable
     * 部分
     * @var int 
     */
    private $dept;

    /**
     * salary variable
     * 薪水
     * @var int
     */
    private $salary;

    /**
     * subordinates variable
     * 下属列表
     * @var array
     */
    private $subordinates = [];

    /**
     * construct function
     *
     * @param string $name
     * @param string $dept
     * @param integer $sal
     */
    public function __construct(string $name, string $dept, int $sal)
    {
        $this->name = $name;
        $this->dept = $dept;
        $this->salary = $sal;
    }

    /**
     * add function
     * 添加下属
     * @param Employee $employee
     * @return static
     */
    public function add(Employee $employee)
    {
        $this->subordinates[] = $employee;
        return $this;
    }

    /**
     * remove function
     * 移除下属
     * @param Employee $employee
     * @return static
     */
    public function remove(Employee $employee)
    {
        $idx = array_search($employee, $this->subordinates);

        if ($idx && isset($this->subordinates[$idx])) {
            unset($this->subordinates[$idx]);
        }
        return $this;
    }

    /**
     * getSubordinates function
     * 获取下属列表
     * @return array
     */
    public function getSubordinates()
    {
        return $this->subordinates;
    }

    /**
     * toString function
     * @override
     * @return string
     */
    public function __toString()
    {
        return sprintf("Employee : [Name:%s,dept:%d,salary:%d]",$this->name, $this->dept, $this->salary);
    }

}
