<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Step;

class Mission extends Model
{
    use HasFactory;

    public $fillable = ['name','configs'];

    public function steps(): HasMany
    {
        return $this->hasMany(Step::class);
    }
}
