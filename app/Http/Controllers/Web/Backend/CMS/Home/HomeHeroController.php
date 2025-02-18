<?php

namespace App\Http\Controllers\Web\Backend\CMS\Home;

use App\Http\Controllers\Controller;
use App\Enums\PageEnum;
use App\Enums\SectionEnum;
use App\Helpers\Helper;
use App\Models\CMS;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeHeroController extends Controller
{
    public $page = PageEnum::HOME;
    public $section = "hero";
    public $item = SectionEnum::HERO;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $section = CMS::where('page', $this->page)->where('section', $this->item)->latest()->first();
        return view("backend.layouts.cms.home.{$this->section}", compact('section'));
    }

    public function content(Request $request)
    {
        $validatedData = request()->validate([
            'name'              => 'nullable|string|max:50',
            'title'             => 'nullable|string|max:255',
            'sub_title'         => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'sub_description'   => 'nullable|string',
            'bg'                => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'btn_text'          => 'nullable|string|max:50',
            'btn_link'          => 'nullable|string|max:100',
            'btn_color'         => 'nullable|string|max:50',
            'rating'            => 'nullable|integer|min:1|max:5'
        ]);
        try {
            $validatedData['page'] = $this->page;
            $validatedData['section'] = $this->item;
            $section = CMS::where('page', $this->page)->where('section', $this->item)->first();
            if ($section) {
                
                if($request->hasFile('bg')) {
                    if ($section->bg && file_exists(public_path($section->bg))) {
                        Helper::fileDelete(public_path($section->bg));
                    }
                    $validatedData['bg'] = Helper::fileUpload($request->file('bg'), $this->section, time() . '_' . getFileName($request->file('bg')));
                }
    
                if ($request->hasFile('image')) {
                    
                    if ($section->image && file_exists(public_path($section->image))) {
                        Helper::fileDelete(public_path($section->image));
                    }
                    $validatedData['image'] = Helper::fileUpload($request->file('image'), $this->section, time() . '_' . getFileName($request->file('image')));
                }

                if($request->has('rating')) {
                    $meta = json_decode($section->metadata);
                    $meta->rating = $validatedData['rating'];
                    $validatedData['metadata'] = json_encode($meta);
                    unset($validatedData['rating']);
                }

                CMS::where('page', $validatedData['page'])->where('section', $validatedData['section'])->update($validatedData);
            } else {
                
                if ($request->hasFile('bg')) {
                    $validatedData['bg'] = Helper::fileUpload($request->file('bg'), $this->section, time() . '_' . getFileName($request->file('bg')));
                }
                
                if ($request->hasFile('image')) {
                    $validatedData['image'] = Helper::fileUpload($request->file('image'), $this->section, time() . '_' . getFileName($request->file('image')));
                }

                if($request->has('rating')) {
                    $metadata = json_encode(['rating' => $validatedData['rating']]);
                    $validatedData['metadata'] = $metadata;
                    unset($validatedData['rating']);
                }

                CMS::create($validatedData);
            }

            return redirect()->route("admin.cms.home.{$this->section}.index")->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }

}
