<?php

namespace App\Models;

use App\Models\Review;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function getPriceStrAttribute() {
        $format_price = number_format($this->price, 0, ',', '.');
        return $this->price == 0 ? 'FREE' : "IDR {$format_price}";
    }

    public function getSlidersAttribute() {
        return explode(',', $this->img_sliders);
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
