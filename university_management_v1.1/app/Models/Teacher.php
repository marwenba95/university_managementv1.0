<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Authenticatable
{
    use Notifiable, HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relationships

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_teacher');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'teacher_group');
    }
}
