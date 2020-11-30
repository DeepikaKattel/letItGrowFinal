<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCareer extends Model
{
    use HasFactory;
    protected $table = 'admin_careers';
    protected $fillable = [
        'department', 'designation', 'job_description', 'vacancyNumber'
    ];
}
