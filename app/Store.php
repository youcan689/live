<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    // protected $fillable = ['name'];
    protected $guarded = [];
    //

    public function cakes()
    {
        return $this->hasMany(Cake::class);
    }
}
