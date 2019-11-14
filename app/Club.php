<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $guarded = [];

    public function players()
    {
        return $this->hasMany(Player::class);
    }

}
