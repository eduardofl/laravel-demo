<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fazenda extends Model {
    // Nome da tabela
    protected $table = 'fazenda';
    // Primary Key
    public $primaryKey = 'CodFazenda';
}