<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Member extends Model {
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
            'job' => 'required|string|min:3',
            'job_ar' => 'required|string|min:3',
            'biography' => 'required|text|min:3',
            'biography_ar' => 'required|text|min:3',
            'facebook' => 'required|string|url|min:3',
            'linkedin' => 'required|string|url|min:3',
            'image_url' => 'required|url',
        ] );

    }

    /**
    * Load English Meta from the database
    *
    * @return mixed
    */
    public static function loadEnglish() {
        return Member::select( 'id', 'name', 'job', 'biography', 'facebook', 'linkedin', 'image_url' )
        ->get()
        ->toArray();

    }

    /**
    * Load Arabic Meta from the database
    *
    * @return mixed
    */
    public static function loadArabic() {
        return Member::select( 'id', 'name_ar as name', 'job_ar as job', 'biography_ar as biography', 'facebook', 'linkedin', 'image_url' )
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
                'id', 'name_ar as name', 'job_ar as job', 'biography_ar as biography', 'facebook', 'linkedin', 'image_url'
            ] );
        } else {
            return $this->where( 'id', $this['id'] )->first( [
                'id', 'name', 'job', 'biography', 'facebook', 'linkedin', 'image_url'
            ] );
        }
    }

}
