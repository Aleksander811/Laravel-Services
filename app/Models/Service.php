<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Specialist;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'adress', 'boss'];

    public function specialists(){
        return $this->hasMany(Specialist::class);
    }
}
