<?php

namespace App\Models;

use Core\Model;

class User extends Model

{
    protected string $table = "cliente";
    protected string $primaryKey = "id";
}