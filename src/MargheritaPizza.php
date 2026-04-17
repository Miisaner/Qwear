<?php

declare(strict_types=1);

namespace Liza\Qubell;

class MargheritaPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct('Маргарита', 'Томатный', ['Моцарелла', 'Базилик']);
    }
}
