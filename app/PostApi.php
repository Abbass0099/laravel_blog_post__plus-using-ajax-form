<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostApi extends Model
{
    // table name
    protected $table = 'post_apis';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;


    protected $fillable = [
        'title',
        'body'
    ];
}
