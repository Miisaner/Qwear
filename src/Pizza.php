<?php

declare(strict_types=1);

namespace Liza\Qubell;

abstract class Pizza
{
    protected string $name;
    protected string $sauce;


    /** @var array<int, string> */
    protected array $toppings;
    /**
     * @param array<int, string> $toppings
     */
    public function __construct(string $name, string $sauce, array $toppings)
    {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топики: " . implode(', ', $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }

}
