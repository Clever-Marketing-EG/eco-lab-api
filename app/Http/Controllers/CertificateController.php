<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CertificateController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\JsonResponse
    */

    public function index(): JsonResponse {

        $certificates = trans('certificates');
        return $this->jsonResponse($certificates);
    }

    /**
    * Show full data of the resource
    *
    * @param Certificate $certificate
    * @return JsonResponse
    */

    public function showFull( Certificate $certificate ): JsonResponse {
        return response()->json( [
            'success' => true,
            'data' => $certificate
        ] );
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\JsonResponse
    */

    public function store( Request $request ): JsonResponse {
        $validated = Certificate::validate( $request );
        $certificate = Certificate::create( $validated );
        return $this->jsonResponse( $certificate, 201 );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Certificate  $certificate
    * @return \Illuminate\Http\JsonResponse
    */

    public function show( Certificate $certificate ): JsonResponse {
        $certificate = $certificate->loadLocale();
        return $this->jsonResponse( $certificate );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Certificate  $certificate
    * @return \Illuminate\Http\JsonResponse
    */

    public function update( Request $request, Certificate $certificate ): JsonResponse {

        $validated = Certificate::validate( $request );
        $certificate->update( $validated );
        return $this->jsonResponse( $certificate );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Certificate  $certificate
    * @return \Illuminate\Http\JsonResponse
    */

    public function destroy( Certificate $certificate ): JsonResponse {
        $certificate->delete();
        return $this->jsonResponse( $certificate );
    }
}
