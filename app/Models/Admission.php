<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $table = 'admission';
    protected $primary_key = 'admission_id_pk';

    use HasFactory;
}
