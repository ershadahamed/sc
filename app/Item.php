<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'cost_price', 'selling_price', 'quantity', 'picture'
    ];

    protected $dates = ['deleted_at'];

    public function order() {
        return $this->belongsToMany(Order::class);
    }
}
