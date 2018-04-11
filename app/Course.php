<?php

namespace App;

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

    public function categories()
    {
    	# code...
    }
}
