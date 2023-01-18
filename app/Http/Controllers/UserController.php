<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(['status' => true, 'message' => "user details", 'data' => array()]);
    }

    /**
     * @OA\Get(
     *   path="/users",
     *   tags={"User"},
     *   summary="List",
     *   description="Users List",
     *   operationId="UserController@index",
     *      @OA\RequestBody(
     *        @OA\MediaType(
     *             mediaType="application/json",
     *          ),
     *     ),
     *   @OA\Response(
     *      response=200,
     *      description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Requests"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *   @OA\Response(
     *       response=403,
     *       description="Forbidden"
     *   )
     *  )
     * */
    public function update()
    {
        return response()->json(['status' => true, 'message' => "user details", 'data' => array()]);
    }
}
