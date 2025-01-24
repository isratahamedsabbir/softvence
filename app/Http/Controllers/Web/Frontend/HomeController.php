<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Enums\PageEnum;
use App\Enums\SectionEnum;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $cms = CMS::where('page', PageEnum::HOME)->where('status', 'active')->get();
        $posts = Post::where('status', 'active')->get();
        return view('frontend.layouts.index', compact('posts', 'cms'));
    }
}
