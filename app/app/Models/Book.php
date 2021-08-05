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
        'isbn',
        'title',
        'author_id',
        'category_id',
        'publisher',
        'released',
        'picture',
    ];


    /**
     * The attributes that are guarded from mass assignable.
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * Getter method to return Author of the book. Book belongs to Author relationship.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }


    /**
     * Getter method to return Category of Book. Book belongs to Category relationship.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }
}
