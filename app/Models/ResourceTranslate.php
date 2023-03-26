<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceTranslate extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'resource_translate';
}
