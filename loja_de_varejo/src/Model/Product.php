<?php

namespace APP\Model;

class Product{
    private string $barCode;
    private string $name;
    private Provider $provider;
    private int $stock;
    private float $price;

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute,$value)
    {
        $this->$attribute = $value;
    }
}