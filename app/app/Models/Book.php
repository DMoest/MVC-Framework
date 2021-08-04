<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'category_id',
        'isbn',
        'title',
        'author',
        'picture',
        'released',
        'publisher',
    ];


    /**
     * The attributes that are guarded from mass assignable.
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * Getter method to return Category of Book. Book belongs to Category relationship.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function getRouteKeyName()
    {
        return 'id';
    }
}
