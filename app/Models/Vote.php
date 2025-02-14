<?php

namespace App\Models;
use App\Models\Option;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function option():BelongsTo{
        return $this->belongsTo(Option::class);
    }
}
