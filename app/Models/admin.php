<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    // protected $fillable = [
    //     'username', 'password', // tambahkan atribut lain sesuai kebutuhan
    // ];

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    public $timestamps = false;
}
