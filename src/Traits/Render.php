<?php

namespace Xentixar\Charts\Traits;

trait Render
{
    use Canvas, Image;

    public function render(): void
    {
        print_r($this->options);
    }
}