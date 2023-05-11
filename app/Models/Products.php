<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected function scopeFilter($query, array $filters) {
        // dd($filters);
        if ($filters['category'] ?? false) {
            $query->where('category','like','%'.request('category').'%');
        } 
        if($filters['brand'] ?? false) {
            $query->where('brand','like','%'.request('brand').'%');
        }
    }
}
