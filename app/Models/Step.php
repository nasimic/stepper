<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Mission;

class Step extends Model
{ 
    use HasFactory;

    public const TYPE_COMMAND = 1;
    public const TYPE_INFORMATION = 2;

    public $fillable = ['body','sort_order','type'];

    public $timestamps = false;
}
