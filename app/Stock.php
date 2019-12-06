<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{

    use SoftDeletes;

    protected $fillable = ['name', 'buying_price', 'selling_price', 'quantity', 'alert_quantity', 'unit_value', 'status', 'supplier_id', 'unit_id', 'expiry_date'];
    protected $dates = ['deleted_at'];
    public function units()
    {
        return $this->hasOne(Unit::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
