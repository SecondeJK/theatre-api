<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(['valid' => true]);
    }

    public function show(Request $request, $uuid)
    {
        return response()->json(['valid' => true]);
    }

    public function update(Request $request, $uuid)
    {
        return response()->json(['valid' => true]);
    }

    public function delete(Request $request, $uuid)
    {
        return response()->json(['valid' => true]);
    }
}
