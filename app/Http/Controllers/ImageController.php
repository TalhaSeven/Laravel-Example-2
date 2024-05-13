<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function show()
    {
        return view("image");
    }
    public function uploadImage(Request $request)
    {
        // $file = $request->file("file");
        dd($request->all());
    }
}
