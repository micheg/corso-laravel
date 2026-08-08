<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Post extends Model
{
    protected $fillable = ["titolo", "contenuto", "pubblicato"];
}
