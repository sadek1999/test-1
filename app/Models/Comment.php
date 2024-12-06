<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable=['user_id','feature_id','comment'];
    public function feature():BelongsTo
    {

    return $this->belongsTo(Feature::class) ;
    }
}
