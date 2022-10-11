<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $softDelete = false;

    public $fillable = [
        'unique_id',
        'long_url'
    ];

    protected $casts = [
        'id' => 'integer',
        'unique_id' => 'string',
        'long_url' => 'string'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
