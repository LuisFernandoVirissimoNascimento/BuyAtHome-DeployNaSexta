<?php

namespace App\Models;

use Core\Model;

class User extends Model

{
    protected string $table = "cliente";
    protected string $primaryKey = "id";

    // public function findByCpf(string $cpf): ?array
    // {
    //     $sql = "SELECT * FROM {$this->getTable()} WHERE cpf = :cpf LIMIT 1";
    //     $stmt = $this->query($sql, ['cpf' => $cpf]);
    //     $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    //     return $result ?: null;
    // }
}