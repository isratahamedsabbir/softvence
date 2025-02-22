<?php
namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Enums\PageEnum;
use App\Helpers\Helper;
use App\Models\CMS;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'home'      => CMS::where('page', PageEnum::HOME)->where('status', 'active')->get(),
            'common'    => CMS::where('page', PageEnum::COMMON)->where('status', 'active')->get(),
            'settings'  => Setting::first(),
        ];
        return Helper::jsonResponse(true, 'Home Page', 200, $data);
    }
}