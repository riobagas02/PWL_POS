<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    // Jobsheet 3
    protected $table = 'm_user'; 
    protected $primaryKey = 'user_id'; 

    // Jobsheet 4
    protected $fillable = ['level_id', 'username', 'nama']; 
}