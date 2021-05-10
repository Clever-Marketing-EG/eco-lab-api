<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MemberController extends ResourceController
{



    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\JsonResponse
    */

    public function index(): JsonResponse {
        return response()->json( array_merge(
            ['success' => true],
            ['data'=>trans( 'members' )]
        ) );
    }

    /**
     * Show full data of the resource
     *
     * @param Member $member
     * @return JsonResponse
     */
    public function showFull(Member $member): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $member
        ]);
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\JsonResponse
    */

    public function store( Request $request ): JsonResponse {
        $validated = Member::validate( $request );
        $member = Member::create( $validated );
        return $this->jsonResponse( $member, 201 );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Member  $member
    * @return \Illuminate\Http\JsonResponse
    */

    public function show( Member $member ): JsonResponse {
        $member = $member->loadLocale();
        return $this->jsonResponse( $member );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Member  $member
    * @return \Illuminate\Http\JsonResponse
    */

    public function update( Request $request, Member $member ): JsonResponse {

        $validated = Member::validate( $request );
        $member->update( $validated );
        return $this->jsonResponse( $member );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Member  $member
    * @return \Illuminate\Http\JsonResponse
    */

    public function destroy( Member $member ): JsonResponse {
        $member->delete();
        return $this->jsonResponse( $member );
    }
}
