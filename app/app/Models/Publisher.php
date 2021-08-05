<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    use HasFactory;

    /**
     * Getter method to return Books published from Publisher. Publisher has many Books relationship.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }


    /**
     * Getter method to return Authors publishing with Publisher. Publisher has many Authors relationship.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function authors(): HasMany
    {
        return $this->hasMany(Author::class);
    }
}
