<?php

namespace App\Service\IntrumentManager;

use App\Service\IntrumentManager\Builder;
use App\Service\IntrumentManager\Wood;
use App\Service\IntrumentManager\Type;

abstract class InstrumentSpecAbstract
{
    private $builder;
    private $model;
    private $type;
    private $backWood;
    private $topWood;

    /**
     * InstrumentSpecAbstract constructor.
     * @param $builder
     * @param $model
     * @param $type
     * @param $backWood
     * @param $topWood
     */
    public function __construct(Builder $builder, $model, Type $type, Wood $backWood, Wood $topWood)
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
    }

    public function matches (InstrumentSpecAbstract $otherSpec) {
        if ($this->builder != $otherSpec->builder) {
            return false;
        }

        if (!empty($this->model) && $this->model != $otherSpec->model) {
            return false;
        }

        if ($this->type != $otherSpec->type) {
            return false;
        }

        if ($this->topWood != $otherSpec->topWood) {
            return false;
        }

        if ($this->backWood != $otherSpec->backWood) {
            return false;
        }

        return true;
    }
}