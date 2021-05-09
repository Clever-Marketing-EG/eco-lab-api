<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Certificate extends Model {
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    /**
    *
    *
    * @param Request $request
    * @return array
    */
    public static function validate( Request $request ):array {

        return $request->validate( [
            'name' => 'required|string|min:3',
            'name_ar' => 'required|string|min:3',
            'image_url' => 'required|url',
        ] );

    }

    /**
    * Load English Meta from the database
    *
    * @return mixed
    */
    public static function loadEnglish() {
        return Certificate::select( 'id', 'name', 'image_url' )
        ->get()
        ->toArray();

    }

    /**
    * Load Arabic Meta from the database
    *
    * @return mixed
    */
    public static function loadArabic() {
        return Certificate::select( 'id', 'name_ar as name', 'image_url' )
        ->get()
        ->toArray();

    }
    /**
    * Loads local version of the client
    *
    * @return mixed
    */

    public function loadLocale() {
        if ( App::getLocale() === 'ar' ) {
            return $this->where( 'id', $this['id'] )->first( [
                'id', 'name_ar as name', 'image_url'
            ] );
        } else {
            return $this->where( 'id', $this['id'] )->first( [
                'id', 'name', 'image_url'
            ] );
        }
    }

}
