<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    protected $fillable = ['image','title','description','quantity','price'];
    use HasFactory;
}
