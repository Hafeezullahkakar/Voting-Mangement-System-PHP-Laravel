<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{

    protected $table  = 'candidates';
    protected $primarykey = 'id';
    protected $fillable =['name', 'cnic', 'email', 'phone', 'password', 'noOfVotes', 'symbole' ];

}
