<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
