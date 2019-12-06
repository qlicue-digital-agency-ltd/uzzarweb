<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'status'];
    protected $dates = ['deleted_at'];

    //relations
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //relations
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
