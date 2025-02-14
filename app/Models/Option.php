<?php

namespace App\Models;
use App\Models\Vote;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Option extends Model
{
    protected $fillable = ['name'];
    public function Votes():HasMany{
        return $this->hasMany(Vote::class);
    }
    public function poll(){
        return $this->belongsTo(Poll::class);
    }
}
