<?php

namespace APP\Model;

class Product{
    private string $barCode;
    private string $name;
    private Provider $provider;
    private int $stock;
    private float $price;
}