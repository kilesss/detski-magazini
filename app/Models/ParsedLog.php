<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParsedLog extends Model
{
    use HasFactory;

    protected $table = 'parsed_log';

    public $timestamps = true;
    protected $fillable = ['client_id', 'created_at', 'updated_at', 'url'];

}
