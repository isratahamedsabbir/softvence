<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
}