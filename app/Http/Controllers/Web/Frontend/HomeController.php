<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Enums\PageEnum;
use App\Enums\SectionEnum;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use App\Models\Post;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $cms = [
            'home' => CMS::where('page', PageEnum::HOME)->where('status', 'active')->get(),
            'common' => CMS::where('page', PageEnum::COMMON)->where('status', 'active')->get(),
        ];
        
        $posts = Post::where('status', 'active')->get();

        $projects = Project::where('status', 'active')->paginate(9);

        return view('frontend.layouts.index', compact('cms', 'posts', 'projects'));
    }

    public function project($slug){
        $cms = [
            'home' => CMS::where('page', PageEnum::HOME)->where('status', 'active')->get(),
            'common' => CMS::where('page', PageEnum::COMMON)->where('status', 'active')->get(),
        ];
        $project = Project::where('slug', $slug)->where('status', 'active')->firstOrFail();
        return view('frontend.layouts.project', compact('cms', 'project'));
    }
}
