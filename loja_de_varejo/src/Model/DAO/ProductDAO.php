<?php

namespace APP\Model\DAO;

use APP\Model\Connection;
use APP\Model\Product;
use PDO;

class ProductDAO
{
    public function insert(Product $product): bool
    {
        $connection = Connection::getConnection();
        $stmt = $connection->prepare('INSERT INTO product VALUES(null,?, ?, ?, ?,1);');
        $stmt->bindParam(1, $product->barCode);
        $stmt->bindParam(2, $product->name);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->stock);
        return $stmt->execute();
    }

    public function findAll()
    {
        $connection = Connection::getConnection();
        $stmt = $connection->query('select * from product;');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
