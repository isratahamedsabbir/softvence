<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:50',
            'email'     => 'required|email|max:100|exists:subscribers,email',
            'subject'   => 'required|string|max:100',
            'message'   => 'required|string|max:1000'
        ]);

        try {
            Contact::create($request->only('name', 'email', 'subject', 'message'));
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong. Please try again.');
        }

        return redirect()->back()->with('t-success', 'Message sent successfully');
    }
}
