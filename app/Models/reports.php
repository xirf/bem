<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;
    protected $table = 'reports';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'content',
        'picture',
        'created_at',
        'updated_at'
    ];

    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
}
