<?php

namespace App;

use App\Director;
use App\HouseBuilder;
use App\HouseWithGardenBuilder;
use App\HouseWithGarageBuilder;
use App\HouseWithSwimmingPoolBuilder;
use App\HouseWithFancyStatuesBuilder;

class Application
{
    public static function run()
    {
        $director = new Director();

        $builder = new HouseWithGardenBuilder();
        $director->setHouseBuilder($builder);

        echo "House With Garden\n";
        $director->makeHouseWithGarden();
        $builder->getResult()->listParts();

        $garageBuilder = new HouseWithGarageBuilder();
        $director->setHouseBuilder($garageBuilder);

        echo "House With Garage\n";
        $director->makeHouseWithGarage();
        $garageBuilder->getResult()->listParts();

        $swimmingPoolBuilder = new HouseWithSwimmingPoolBuilder();
        $director->setHouseBuilder($swimmingPoolBuilder);


        echo "House With Swimming Pool\n";
        $director->makeHouseWithSwimmingPool();
        $swimmingPoolBuilder->getResult()->listParts();

        $fancyStatuesBuilder = new HouseWithFancyStatuesBuilder();
        $director->setHouseBuilder($fancyStatuesBuilder);


        echo "House With Fancy Statues\n";
        $director->makeHouseWithFancyStatues();
        $fancyStatuesBuilder->getResult()->listParts();
    }
}