<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurss;

class KurssController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'banner_link' => 'string',
            'followers' => 'required|integer',
        ]);

        $kurss = Kurss::create($request->all());

        return response()->json($kurss);
    }

    public function index(Request $request)
    {
        return response()->json(Kurss::all());
    }
}
