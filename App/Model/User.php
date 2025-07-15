<?php

namespace App\Models;

use Core\Model;

class User extends Model

{
    protected string $table = "usuarios";
    protected string $primaryKey = "id";
}