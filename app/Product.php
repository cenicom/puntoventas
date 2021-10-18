<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'code',
        'name',
        'stok',
        'image',
        'sell_price',
        'status',
        'category_id',
        'provider_id'
    ];

    public function category()
    {
        # code...
        return $this->belongsTo(Category::class);
    }

    public function provider()
    {
        # code...
        return $this->belongsTo(Provider::class);
    }
}
