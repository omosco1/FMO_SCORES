<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = [];

    public function getFitnessAttribute($attribute)
    {

    return [
        0 => 'Not-Fit',
        1 => 'Fit',
    ][$attribute];

    }


    public function scopeFit($query)
    {
       return $query->where('fitness',1);

    }

    public function scopeUnfit($query)
    {
       return $query->where('fitness',0);

    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }


}
