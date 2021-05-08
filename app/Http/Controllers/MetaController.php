<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class MetaController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\JsonResponse
    */

    public function index() {
        $meta = trans( 'meta' );
        $arr = [];
        foreach ( $meta as $metum ) {

            if ( !array_key_exists( $metum['page'], $arr ) ) {
                $arr[$metum['page']] = [];
            }
            array_push( $arr[$metum['page']], $metum );
        }
        return response()->json( [
            'success' => true,
            'data' => $arr
        ] );

    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\JsonResponse
    */

    public function fullIndex(): JsonResponse {
        $meta = Meta::all();
        return response()->json( [
            'success' => true,
            'data' => $meta
        ] );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Meta  $meta
    * @return \Illuminate\Http\JsonResponse
    */

    public function show( Meta $metum ): jsonResponse {
        return response()->json( [
            'success' => true,
            'data' => $metum
        ] );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Meta  $meta
    * @return \Illuminate\Http\JsonResponse
    */

    public function update( Request $request, Meta $metum ) {
        $validated = Meta::validate( $request );
        $metum->update( $validated );
        return response()->json( [
            'success' => true,
            'data' => $metum
        ] );

    }

}
