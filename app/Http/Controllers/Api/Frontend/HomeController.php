<?php
namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CMS;

class HomeController extends Controller
{
    public function index()
    {
        $cmd = CMS::all();
        return response()->json([
            'cms' => $cmd,
        ]);
    }
}