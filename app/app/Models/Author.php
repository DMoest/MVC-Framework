<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;


    /**
     * Attributes that are protected from mass assigning.
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * Getter method to return Books from Author. Authors has many books relationship (at least a 'can have many').
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
