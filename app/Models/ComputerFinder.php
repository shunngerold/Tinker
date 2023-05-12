<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComputerFinder extends Model
{
    use HasFactory;

    protected function scopeFilter($query, array $filters) {
        // dd($filters);
        if ($filters['type'] ?? false) {
            $query->where('type','like','%'.$filters['type'].'%');
        } 
        if($filters['storage'] ?? false) {
            $query->where('storage','like','%'.$filters['storage'].'%');
        }
        if($filters['endurance'] ?? false) {
            $query->where('endurance','like','%'.$filters['endurance'].'%');
        }
        if($filters['budget'] ?? false) {
            $query->where('budget','like','%'.$filters['budget'].'%');
        }
        if($filters['category'] ?? false) {
            $query->where('category','like','%'.$filters['category'].'%');
        }
        if($filters['aesthetic'] ?? false) {
            $query->where('aesthetic','like','%'.$filters['aesthetic'].'%');
        }
        if($filters['peripherals'] ?? false) {
            $query->where('peripherals','like','%'.$filters['peripherals'].'%');
        }
    }
}
