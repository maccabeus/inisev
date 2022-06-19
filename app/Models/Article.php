<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * Mass fillable product properties
     *
     * @var array<int, string>
     */
    protected  $fillable=[
        'website_id',
        'author_id',
        'author_email',
        'title',
        'description',
        'post_slug',
        'post_content'
    ];
}
