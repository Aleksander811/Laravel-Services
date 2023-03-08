<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Specialist extends Model
{
    use HasFactory;

    protected $fillable = ['name','specialization','city','photo','serviceId'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
