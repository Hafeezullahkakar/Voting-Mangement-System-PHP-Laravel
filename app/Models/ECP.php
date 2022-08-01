<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ECP extends Model
{
    protected $table  = 'ecps';
    protected $primarykey = 'id';
    protected $fillable =['name', 'cnic', 'email', 'phone', 'password'];

}
