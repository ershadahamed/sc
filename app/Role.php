<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'min_purchase'];
    protected $dates = ['deleted_at'];

    public function user() {
        return $this->belongsToMany(User::class);
    }
}
