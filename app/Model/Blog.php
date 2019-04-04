<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    public $timestamps = false;// created_at nggak ada

    protected $fillable     = ['title', 'isi']; //Whitelist
    // protected $guarded      = ['created_at', 'updated_at']; Blacklist
}
