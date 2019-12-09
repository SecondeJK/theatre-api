<?php

namespace App\Http\Controllers;

use App\MeetupTalk;
use Illuminate\Http\Request;

/**
 * @OA\Info(title="Theatre API with OpenAPI docs", version="0.1")
 */
class ApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/talks/index"
     *     @OA\Response(response="200", description="Show all talks")
     * )
     */
    public function index(Request $request)
    {
        $payload = MeetupTalk::all();
        return response()->json($payload);
    }

    /**
     * @OA\Get(
     *     path="/api/talks/show/{id}",
     *     @OA\Response(response="200", description="Show talk by UUID")
     * )
     */
    public function show(Request $request, $uuid)
    {
        $talk = MeetupTalk::where('uuid',$uuid)->get()->first();

        if (!$talk) {
            return response('Error: no talk found', 404);
        }

        return response()->json($talk);
    }

    /**
     * @OA\Post(
     *     path="/api/talks/create",
     *     @OA\Response(response="200", description="Create talk from payload")
     * )
     */
    public function store(Request $request)
    {
        return MeetupTalk::create($request->all());
    }

    /**
     * @OA\Put(
     *     path="/api/talks/update/{id}",
     *     @OA\Response(response="200", description="update talk from payload by UUID")
     * )
     */
    public function update(Request $request, $uuid)
    {
        $talk = MeetupTalk::where('uuid',$uuid);
        $talk->update($request->all());
        return response()->json($talk->get());
    }

    /**
     * @OA\Delete(
     *     path="/api/talks/delete/{id}",
     *     @OA\Response(response="200", description="Delete talk by UUID")
     * )
     */
    public function delete(Request $request, $uuid)
    {
        $talk = MeetupTalk::where('uuid',$uuid);
        $talk->delete();

        return response('Talk deleted', 204);
    }
}
