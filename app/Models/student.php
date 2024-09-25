<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model

{
    

    public function students()
    {
       return $this->hasMany(student::class);
    }
    
    protected $fillable = ['first_name', 'last_name', 'email', 'age'];
    use HasFactory;
}
