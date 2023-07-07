<?php

namespace MyApp;

use MyApp\Utils\MathUtils;

class App 
{
    public function run()
    {
        $result = MathUtils::add(5,3);
        echo "Result: " . $result . PHP_EOL;
    }
}