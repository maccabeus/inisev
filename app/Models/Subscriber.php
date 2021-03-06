<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    /**
     * Mass fillable fields
     *
     * @var array
     */
    protected  $fillable=[
        'subscriber_email',
        'website_id',
        'subscriber_id'
    ];
}
