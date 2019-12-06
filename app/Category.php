<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;

    protected $fillable = ['name', 'details', 'status', 'parent_id'];
    protected $dates = ['deleted_at'];



    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function shops()
    {
        return $this->belongsTo(Shop::class);
    }
}
