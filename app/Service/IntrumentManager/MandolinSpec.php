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
use App\Service\IntrumentManager\Style;

class MandolinSpec extends InstrumentSpecAbstract
{
    private $style;

    public function __construct(
        Builder $builder,
        $model,
        Type $type,
        Wood $backWood,
        Wood $topWood,
        Style $style
    ){
        parent::__construct($builder, $model, $type, $backWood, $topWood);
        $this->style = $style;
    }

    /**
     * @param InstrumentSpecAbstract $otherSpec
     * @return bool
     */
    public function matches(InstrumentSpecAbstract $otherSpec)
    {
        if (parent::matches($otherSpec)) {
            return false;
        }

        if ($otherSpec instanceof GuitarSpec) {
            return false;
        }

        if (isset($otherSpec->style) && $this->style != $otherSpec->style) {
            return false;
        }

        return true;
    }
}