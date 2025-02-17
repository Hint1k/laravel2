<?php
// created with command: php artisan make:model Review -m
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public function book() {
        return $this->belongsTo(Book::class);
    }
}
