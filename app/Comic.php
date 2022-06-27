<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comic extends Model
{
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];

    public function serie(): BelongsTo
    {
        return $this->belongsTo(Serie::class);
    }

}
