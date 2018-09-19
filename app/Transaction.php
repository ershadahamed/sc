<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'references', 'paid_by', 'amount_paid', 'amount_to_pay', 'order_id', 'status', 'remarks', 'internal_ref',
    ];

    protected $dates = ['deleted_at'];
}
