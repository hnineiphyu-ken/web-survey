<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use SoftDeletes, HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'name',
        'phone',
        'company_name',
        'designation',
        'token',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        $date->format('Y-m-d');
    }

}
