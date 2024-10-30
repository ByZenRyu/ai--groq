<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class History extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer']; // Tambahkan 'question' di sini
}