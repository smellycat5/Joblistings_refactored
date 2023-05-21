<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'location',
        'email'
    ];

    public function job()
    {
        return $this->hasMany(Job::class);
    }
    
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
