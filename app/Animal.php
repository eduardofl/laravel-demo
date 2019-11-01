<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model {
    // Nome da tabela
    protected $table = 'animal';
    // Primary Key
    public $primaryKey = 'CodAnimal';
    public $incrementing = false;
}
