<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    protected $table = 'cakes';
    protected $guarded = [];
    //

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
