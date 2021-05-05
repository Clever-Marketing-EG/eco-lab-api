<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'points' => 'array',
        'points_ar' => 'array'
    ];
    public $timestamps = false;

    /**
     * Validates a product instance
     *
     * @param Request $request
     * @return array
     */
    public static function validate(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|min:3',
            'name_ar' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'description_ar' => 'required|string|min:3',
            'points' => 'required|array|min:1',
            'points.*' => 'required|string:min:3',
            'points_ar' => 'required|array|min:1',
            'points_ar.*' => 'required|string:min:3',
            'price' => 'required|integer|min:0'
        ]);
    }


    public static function loadEnglish()
    {
        return Product::select('id', 'name', 'description', 'points', 'price')
            ->get()
            ->toArray();
    }

    public static function loadArabic()
    {
        return Product::select('id', 'name_ar as name', 'description_ar as description', 'points_ar as points', 'price')
            ->get()
            ->toArray();
    }

    /**
     * Loads local version of the client
     *
     * @return mixed
     */
    public function loadLocale()
    {
        if (App::getLocale() === 'ar') {
            return $this->where('id', $this['id'])->first([
                'id', 'name_ar as name', 'description_ar as description', 'points_ar as points', 'price'
            ]);
        } else {
            return $this->where('id', $this['id'])->first([
                'id', 'name', 'description', 'points', 'price'
            ]);
        }
    }
}
