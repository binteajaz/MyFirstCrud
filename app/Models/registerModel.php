<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registerModel extends Model
{
    use HasFactory;
    protected $table = "registration_new";
    protected $fillable = [
        "name",
        "email",
        "password",
        "image"
    ];
}
