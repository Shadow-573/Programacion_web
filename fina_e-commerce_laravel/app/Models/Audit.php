<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = ['action', 'auditable_type', 'auditable_id', 'old_values', 'new_values'];
}
