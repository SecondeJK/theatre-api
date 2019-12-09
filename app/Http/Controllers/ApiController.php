<?php

namespace App\Http\Controllers;

use App\MeetupTalk;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $payload = MeetupTalk::all();
        return response()->json($payload);
    }

    /**
     * @param Request $request
     * @param $uuid
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
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
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return MeetupTalk::create($request->all());
    }

    /**
     * @param Request $request
     * @param $uuid
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $uuid)
    {
        $talk = MeetupTalk::where('uuid',$uuid);
        $talk->update($request->all());

        return response()->json($talk);
    }

    /**
     * @param Request $request
     * @param $uuid
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function delete(Request $request, $uuid)
    {
        $talk = MeetupTalk::where('uuid',$uuid);
        $talk->delete();

        return response('Talk deleted', 204);
    }
}
