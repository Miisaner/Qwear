<?php

declare(strict_types=1);

namespace Liza\Qubell;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
           parent::__construct('Пепперони', 'Томатный', ['Пепперони', 'Моцарелла']);
    }
}
