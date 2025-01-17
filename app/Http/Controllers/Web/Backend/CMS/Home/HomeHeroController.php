<?php

namespace App\Http\Controllers\Web\Backend\CMS\Home;

use App\Enums\PageEnum;
use App\Enums\SectionEnum;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Exception;
use Illuminate\Http\Request;

class HomeHeroController extends Controller
{

    public function index()
    {
        $hero = CMS::where('page', PageEnum::HOME->value)->where('section', SectionEnum::HERO->value)->first();
        return view('backend.layouts.cms.home.hero', compact('hero'));
    }
    public function update(Request $request)
    {
        $validatedData = request()->validate([
            'title'         => 'required|string|max:50',
            'description'   => 'required|string|max:255',
            'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'btn_text'      => 'required|string|max:20',
            'btn_link'      => 'required|string|max:100',
            'rating'        => 'required|numeric',
        ]);
        
        try {
            $validatedData['page'] = PageEnum::HOME->value;
            $validatedData['section'] = SectionEnum::HERO->value;
            if ($request->hasFile('image')) {
                $validatedData['image'] = Helper::fileUpload($request->file('image'), 'cms', time() . '_' . getFileName($request->file('image')));
            }

            $metadata = json_encode(['rating' => $validatedData['rating']]);
            $validatedData['metadata'] = $metadata;
            unset($validatedData['rating']);

            if (CMS::where('page', $validatedData['page'])->where('section', $validatedData['section'])->exists()) {
                CMS::where('page', $validatedData['page'])->where('section', $validatedData['section'])->update($validatedData);
            } else {
                CMS::create($validatedData);
            }

            return redirect()->route('cms.home.hero')->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }
}
