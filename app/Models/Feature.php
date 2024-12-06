<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'user_id'];

    public function comment(): HasMany
    {

        return $this->hasMany(Comment::class);
    }
    public function upvote():HasMany
    {

    return $this->hasMany(upvote::class);
    }

    public function user():BelongsTo
    {

    return $this->belongsTo(User::class) ;
    }
}
