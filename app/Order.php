<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'status', 'order_by', 'attend_by', 'tracking_id', 'internal_ref',
    ];

    protected $dates = ['deleted_at'];

    public function item() {
        return $this->belongsToMany(Item::class);
    }
}
