<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable= ['rm','nama','tanggal','ktp','kk','ktppj','fotopj','fotolain'];
    use HasFactory;
}