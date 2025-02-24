<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CaptchaController extends Controller {
    /**
     * Display mail settings page.
     *
     * @return View
     */
    public function index(): View {
        $settings = [
            'recaptcha_site_key'    => env('RECAPTCHA_SITE_KEY', ''),
            'recaptcha_secret_key'=> env('RECAPTCHA_SECRET_KEY', '')
        ];

        return view('backend.layouts.settings.captcha_settings', compact('settings'));
    }

    /**
     * Update mail settings.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse {
        $request->validate([
            'recaptcha_site_key'      => 'nullable|string',
            'recaptcha_secret_key'  => 'nullable|string'
        ]);

        try {
            $envContent = File::get(base_path('.env'));
            $lineBreak  = "\n";
            $envContent = preg_replace([
                '/RECAPTCHA_SITE_KEY=(.*)\s*/',
                '/RECAPTCHA_SECRET_KEY=(.*)\s*/'
            ], [
                'RECAPTCHA_SITE_KEY=' . $request->recaptcha_site_key.$lineBreak,
                'RECAPTCHA_SECRET_KEY=' . $request->recaptcha_secret_key.$lineBreak
            ], $envContent);

            File::put(base_path('.env'), $envContent);

            return back()->with('t-success', 'Updated successfully');
        } catch (Exception) {
            return back()->with('t-error', 'Failed to update');
        }
    }
}
