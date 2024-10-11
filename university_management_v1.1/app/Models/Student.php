<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'gender',
        'class_id',
        'group_id',
    ];

    // Relationships

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
