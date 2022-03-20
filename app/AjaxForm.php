<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjaxForm extends Model
{
    // Table Name
    protected $table = 'ajaxforms';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
