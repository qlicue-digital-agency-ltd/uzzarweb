<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use SoftDeletes;

    ///Allowable field to be injection into the database
    protected $fillable = ['name', 'si_unit'];
    ///fields that shoudn't be returned with response
    protected $dates = ['deleted_at'];


    public function stocks()
    {
        return $this->belongsTo(Stock::class);
    }
}
