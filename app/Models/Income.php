<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Income extends Model
{
    //
    protected $fillable = ['amount', 'category_id'];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

}
