<?php

declare(strict_types=1);

namespace Liza\Qubell;

class BBQPizza extends Pizza
{
    public function __construct()
    {
           parent::__construct('BBQ', 'Барбекю', ['Курица', 'Лук', 'Моцарелла']);
    }
}
