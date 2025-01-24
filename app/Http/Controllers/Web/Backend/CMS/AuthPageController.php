<?php

namespace App\Http\Controllers\Web\Backend\CMS;

use App\Enums\PageEnum;
use App\Enums\SectionEnum;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Exception;
use Illuminate\Http\Request;

class AuthPageController extends Controller
{

    public function index()
    {
        $data = CMS::where('page', PageEnum::AUTH)->where('section', SectionEnum::BG)->first();
        return view('backend.layouts.cms.auth.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $validatedData = request()->validate([
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        try {
            $validatedData['page'] = PageEnum::AUTH;
            $validatedData['section'] = SectionEnum::BG;
            if ($request->hasFile('image')) {
                $validatedData['image'] = Helper::fileUpload($request->file('image'), 'cms', time() . '_' . getFileName($request->file('image')));
            }
            if (CMS::where('page', $validatedData['page'])->where('section', $validatedData['section'])->exists()) {
                CMS::where('page', $validatedData['page'])->where('section', $validatedData['section'])->update($validatedData);
            } else {
                CMS::create($validatedData);
            }
            return redirect()->route('cms.page.auth.section.bg.index')->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }
}
