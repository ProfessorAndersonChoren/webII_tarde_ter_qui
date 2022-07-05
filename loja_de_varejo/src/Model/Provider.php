<?php

namespace APP\Model;

class Provider{
    private ?string $cnpj;
    private string $name;

    public function __construct(
        string $name,
        ?string $cnpj = null
    )
    {
        $this->name = $name;
        $this->cnpj = $cnpj;
    }

    public function __get($attribute){
        return $this->$attribute;
    }

    public function __set($attribute, $value){
        $this->$attribute = $value;
    }
}