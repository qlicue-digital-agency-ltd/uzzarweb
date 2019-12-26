<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'physical_address', 'mobile', 'country', 'district'];
    protected $dates = ['deleted_at'];



    //eloquent relations

    public function voucher()
    {
        return $this->hasOne(Store::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
