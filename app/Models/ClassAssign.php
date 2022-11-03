<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassAssign extends Model
{
    use HasFactory;
    protected $table = "class_assign";
    protected $primaryKey = "class_assign_id_pk";
}
