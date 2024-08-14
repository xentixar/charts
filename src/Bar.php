<?php

namespace Xentixar\Charts;

use Xentixar\Charts\Bases\Chart;
use Xentixar\Charts\Enums\ChartType;

class Bar extends Chart
{
    protected ChartType $type = ChartType::BAR;
}