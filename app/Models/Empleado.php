<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    /* use HasFactory; */
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;
}
