<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $table = 'properties';
    protected $primaryKey = 'id';
    protected $fillable = ['prd_id','size','color','color_name','batch','amount'];
}
