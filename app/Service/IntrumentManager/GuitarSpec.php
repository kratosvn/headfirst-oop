<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 2/6/2018
 * Time: 11:46 PM
 */

namespace App\Service\IntrumentManager;

use App\Service\IntrumentManager\Builder;
use App\Service\IntrumentManager\Type;
use App\Service\IntrumentManager\Wood;

class GuitarSpec extends InstrumentSpecAbstract
{
    private $numString;

    public function __construct(
        Builder $builder,
        $model,
        Type $type,
        Wood $backWood,
        Wood $topWood,
        $numString
    ){
        parent::__construct($builder, $model, $type, $backWood, $topWood);
        $this->numString = $numString;
    }

    /**
     * @param InstrumentSpecAbstract $otherSpec
     * @return bool
     */
    public function matches(InstrumentSpecAbstract $otherSpec)
    {
        if (!parent::matches($otherSpec)) {
            return false;
        }

        if (!($otherSpec instanceof GuitarSpec)) {
            return false;
        }

        if (isset($otherSpec->numString) && $this->numString != $otherSpec->numString) {
            return false;
        }

        return true;
    }
}