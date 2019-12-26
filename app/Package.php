<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;

    ///Allowable field to be injection into the database
    protected $fillable = ['name', 'amount', 'commision'];
    ///fields that shoudn't be returned with response
    protected $dates = ['deleted_at'];


    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }
}
