<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fees_Type extends Model
{
    use HasFactory;
    protected $table = "fees_type";
    protected $primaryKey = "fees_type_id_pk";
}
