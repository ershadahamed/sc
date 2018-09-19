<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'hp', 'address', 'picture', 'ic', 'state', 'city', 'postcode'
    ];

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
