<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'class_id',
    ];

    // Relationships

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'group_id');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_group');
    }
}
