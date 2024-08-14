<?php

namespace Xentixar\Charts\Bases;

use Xentixar\Charts\Enums\ChartType;
use Xentixar\Charts\Traits\Configurations;
use Xentixar\Charts\Traits\Render;

class Chart
{
    use Render, Configurations;

    protected ChartOptions $options;
    protected ChartType $type;
}