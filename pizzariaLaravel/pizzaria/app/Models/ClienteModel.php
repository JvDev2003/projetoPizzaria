<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $fillable = ['cpf','nome', 'fkLogin'];
    protected $forengKey = "fkLogin";
    
    public $timestamps = false;
}
