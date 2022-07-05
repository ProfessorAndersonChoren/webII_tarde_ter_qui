<?php

namespace APP\Model;

class Provider{
    private string $cnpj;
    private string $name; 

    public function __get($attribute){
        return $this->$attribute;
    }

    public function __set($attribute, $value){
        $this->$attribute = $value;
    }
}