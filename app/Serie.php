<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Serie extends Model
{
    //
    protected $fillable = ['name'];

    public function comics(): HasMany
    {
        return $this->HasMany(Comic::class);
    }
}
