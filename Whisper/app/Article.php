<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{    
	// table
    protected $table = "articles";

    // fields
    protected $fillable = ["title", "body"];
}
