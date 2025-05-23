<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSite extends Model
{
    use HasFactory;

    protected $table = 'admin_site';

    protected $fillable = [
        'key',
        'value'
    ];
}
