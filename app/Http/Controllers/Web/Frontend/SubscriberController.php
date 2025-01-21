<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Exception;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|unique:subscribers,email'
        ]);

        if (Subscriber::firstOrCreate([
            'email' => $validate['email']
        ])) {

            session()->put('t-success', 'Subscriber created successfully');
           
        } else {

            session()->put('t-error', 'Subscriber created failed!');
        }

        return redirect()->back();
        
    }
}
