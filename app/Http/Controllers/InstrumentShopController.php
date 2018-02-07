<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 2/7/2018
 * Time: 12:22 AM
 */

namespace App\Http\Controllers;

use App\Service\IntrumentManager\Guitar;
use Illuminate\Routing\Controller as BaseController;
use App\Service\IntrumentManager\Builder;
use App\Service\IntrumentManager\GuitarSpec;
use App\Service\IntrumentManager\Inventory;
use App\Service\IntrumentManager\MandolinSpec;
use App\Service\IntrumentManager\Style;
use App\Service\IntrumentManager\Wood;
use App\Service\IntrumentManager\Type;

class InstrumentShopController extends BaseController
{
    /*@var Inventory $inventory */
    protected $inventory = [];

    function __construct()
    {
        $this->inventory = new Inventory();
    }

    public function index()
    {
        $builder = new Builder();
        $type = new Type();
        $backWood = new Wood();
        $topWood = new Wood();
        $numString = 1;
        $model = "2019";
        $style = new Style();
        $type = new Type();

        $spec = new GuitarSpec($builder, $model, $type, $backWood, $topWood, $numString);
        $this->inventory->addInstrument(1, 20, $spec);

        $spec = new MandolinSpec($builder, "2000", $type, $backWood, $topWood, $style);
        $this->inventory->addInstrument(2, 20, $spec);

        $spec = new GuitarSpec($builder, "1990", $type, $backWood, $topWood, $numString);
        $this->inventory->addInstrument(3, 30, $spec);

        $spec = new MandolinSpec($builder,  "2088", $type, $backWood, $topWood, $style);
        $this->inventory->addInstrument(4, 40, $spec);

        $specSearch = new GuitarSpec($builder, "19910", $type, $backWood, $topWood, $numString);
        $this->inventory->search($spec);
    }
}