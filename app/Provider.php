<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'doc_number',
        'address',
        'phone'
    ];

    public function product()
    {
        # code...
        return $this->hasMany(Product::class);
    }
}
