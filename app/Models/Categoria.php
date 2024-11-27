<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'string', 
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
