<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use SoftDeletes;

    protected $fillable = ['code', 'store_id'];
    protected $dates = ['deleted_at'];



    //eloquent relations

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
