<?php

namespace Xentixar\Charts\Bases;

use Xentixar\Charts\Enums\ChartType;

class ChartOptions
{
    private string $label;
    private array $data;
    private ChartType $type;

    public function __construct(string $label, array $data)
    {
        $this->label = $label;
        $this->data = $data;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getType(): ChartType
    {
        return $this->type;
    }

    public function setType(ChartType $type): void
    {
        $this->type = $type;
    }
}