<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTranslate extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'company_employee';
}
