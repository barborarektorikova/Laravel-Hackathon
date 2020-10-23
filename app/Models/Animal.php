<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Animal extends Model
{
    use HasFactory;

    public function owners()
    {
        return $this->belongsTo(Owner::class);
    }
}
