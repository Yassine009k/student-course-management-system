<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['nom_course'];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
