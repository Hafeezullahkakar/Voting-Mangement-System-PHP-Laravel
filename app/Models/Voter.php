<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $table  = 'voters';
    protected $primarykey = 'id';
    protected $fillable =['name', 'cnic', 'email', 'phone', 'password'];

}
