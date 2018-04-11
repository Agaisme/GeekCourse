<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = "categories";

	protected $fillable = [
        "name",
        "slug",
        "description",
        "parent_id",
    ];

	public function courses()
	{
		return $this->hasMany(Course::class);
	}

}
