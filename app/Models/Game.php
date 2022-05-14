<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Game extends Model {
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function getPriceAttribute($price) {
        $format_price = number_format($price, 0, ',', '.');
        return $price == 0 ? 'FREE' : "IDR {$format_price}";
    }

    public function getLongDescriptionAttribute() {
        return Str::limit($this->description, 200, $end = '...');
    }

    public function getShortDescriptionAttribute() {
        return Str::limit($this->description, 100, $end = '...');
    }

    public function getReleaseDateAttribute() {
        return date('d M, Y', strtotime($this->created_at));
    }
}
