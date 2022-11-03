<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassAdd extends Model
{
    use HasFactory;
    protected $table        =   "student_class_add";
    protected $primaryKey   =   "add_class_id_pk";
}
