<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardapioModel extends Model
{
    use HasFactory;

    protected $table = 'pizza';
    protected $fillable = ['nome','ingredientes', 'img_url', 'valor'];
    //protected $primaryKey = "nome";
    
    public $timestamps = false;
}
