<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 1/9/2018
 * Time: 12:02 AM
 */

namespace App\Service\Guitar;


class Guitar
{
    private $serialNumber;
    private $builder;
    private $model;
    private $type;
    private $backWood;
    private $topWood;
    private $price;

    function __construct(
        $serialNumber,
        $builder,
        $model,
        $type,
        $backWood,
        $topWood,
        $price
    ){
        $this->serialNumber = $serialNumber;
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @return mixed
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getBackWood()
    {
        return $this->backWood;
    }

    /**
     * @return mixed
     */
    public function getTopWood()
    {
        return $this->topWood;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

}