<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessTokenModel extends Model
{
    //

    protected $table = 'access_token';
    protected $primaryKey = 'id';
    public $increment = true;
    protected $keyType = 'int';
    public $timestamps = false;
}