<?php

namespace App\Http\Controllers\Web\Retailer;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('retailer.index');
    }
}
