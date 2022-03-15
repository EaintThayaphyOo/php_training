<?php
namespace App\Models;
use App\Majors;
use Illuminate\Database\Eloquent\Model;
class Students extends Model
{
    protected $fillable = [
        'name', 'address'
    ];
}