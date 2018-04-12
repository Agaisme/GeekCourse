<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";

    protected $fillable = [
        "title",
        "slug",
        "description",
        "thumbnail",
        "rating",
        "student_count",
        "price",
        "status",
        "category_id",
        "author_id",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
