<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportUsers extends Model
{
    public $fillable = ['name', 'email', 'email_verified_at'];
}
