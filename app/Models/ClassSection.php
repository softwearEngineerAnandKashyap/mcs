<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ClassSection extends Model
{
    use HasFactory;
    protected $table        =   "student_class_section";
    protected $primaryKey   =   "section_id_pk";
}
