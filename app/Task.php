<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Enums\TaskStatus;

class Task extends Model
{
    protected $fillable = ['status'];
}
