<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_pic',
        'full_name',
        'email',
        'password',
        'phone_number1',
        'phone_number2',
        'address',
        'education_status',
        'about_me',
    ];

    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }

}
