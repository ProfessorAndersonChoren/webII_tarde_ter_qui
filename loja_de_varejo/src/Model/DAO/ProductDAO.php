<?php

namespace APP\Model\DAO;

use APP\Model\Connection;
use APP\Model\Product;

class ProductDAO
{
    public function insert(Product $product): bool
    {
        $connection = Connection::getConnection();
        $stmt = $connection->prepare('INSERT INTO produtos VALUES(null,?,?,?,?);');
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->price);
        $stmt->bindParam(3, $product->stock);
        $stmt->bindParam(4, $product->barCode);
        return $stmt->execute();
    }
}
