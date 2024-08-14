<?php

namespace Xentixar\Charts\Traits;

use Xentixar\Charts\Bases\ChartOptions;
trait Configurations
{
    public function configureOptions(ChartOptions $options): void
    {
        $this->options = $options;
        $this->options->setType($this->type);
    }
}