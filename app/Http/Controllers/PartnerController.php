<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function index(): JsonResponse
    {

        $partners = trans('partners');
        return $this->jsonResponse($partners);
    }

    /**
     * Show full data of the resource
     *
     * @param Partner $partner
     * @return JsonResponse
     */

    public function showFull(Partner $partner): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $partner
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request): JsonResponse
    {
        $validated = Partner::validate($request);
        $partner = Partner::create($validated);
        return $this->jsonResponse($partner, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\JsonResponse
     */

    public function show(Partner $partner): JsonResponse
    {
        $partner = $partner->loadLocale();
        return $this->jsonResponse($partner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, Partner $partner): JsonResponse
    {

        $validated = Partner::validate($request);
        $partner->update($validated);
        return $this->jsonResponse($partner);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy(Partner $partner): JsonResponse
    {
        $partner->delete();
        return $this->jsonResponse($partner);
    }
}
