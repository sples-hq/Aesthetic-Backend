<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wallpaper;

class WallpapersApiController extends Controller
{
    public function index()
    {
        return Wallpaper::all();
    }
}
