<?php

namespace APP\Model;

class Product
{
    private string $barCode;
    private string $name;
    private Provider $provider;
    private int $stock;
    private float $price;

    public function __construct(
        string $barCode,
        string $name,
        Provider $provider,
        float $cost,
        float $tributes,
        float $operationCost,
        float $lucre = 0.4,
        int $stock = 0
    ) {
        $this->barCode = $barCode;
        $this->name = $name;
        $this->provider = $provider;
        $this->stock = $stock;
        self::calculateSalePrice(
            cost: $cost,
            tributes: $tributes,
            lucre: $lucre,
            operationCost: $operationCost
        );
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    private function calculateSalePrice(
        float $cost,
        float $operationCost,
        float $tributes,
        float $lucre
    ): void {
        $this->price = ($cost + $tributes + $operationCost) / $lucre;
    }
}
