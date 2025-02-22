<?php

namespace App\Http\Controllers\Web\Backend\CMS\Web\Home;

use App\Http\Controllers\Controller;
use App\Enums\PageEnum;
use App\Enums\SectionEnum;
use App\Helpers\Helper;
use App\Models\CMS;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\CmsRequest;
use App\Services\CmsService;

class HomeHeroController extends Controller
{
    protected $cmsService;

    public $page = PageEnum::HOME;
    public $section = "hero";
    public $item = SectionEnum::HERO;

    public function __construct(CmsService $cmsService)
    {
        $this->cmsService = $cmsService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $section = CMS::where('page', $this->page)->where('section', $this->item)->latest()->first();
        return view("backend.layouts.cms.home.{$this->section}", compact('section'));
    }

    public function content(CmsRequest $request)
    {
        $validatedData = $request->validated();
        try {
            $validatedData['page'] = $this->page;
            $validatedData['section'] = $this->item;
            $section = CMS::where('page', $this->page)->where('section', $this->item)->first();

            if($request->hasFile('bg')) {
                if ($section && $section->bg && file_exists(public_path($section->bg))) {
                    Helper::fileDelete(public_path($section->bg));
                }
                $validatedData['bg'] = Helper::fileUpload($request->file('bg'), $this->section, time() . '_' . getFileName($request->file('bg')));
            }

            if ($request->hasFile('image')) {
                if ($section && $section->image && file_exists(public_path($section->image))) {
                    Helper::fileDelete(public_path($section->image));
                }
                $validatedData['image'] = Helper::fileUpload($request->file('image'), $this->section, time() . '_' . getFileName($request->file('image')));
            }

            if($request->has('rating')) {
                $validatedData['metadata']['rating'] = $validatedData['rating'];
                unset($validatedData['rating']);
            }

            if ($section) {
                CMS::where('page', $validatedData['page'])->where('section', $validatedData['section'])->update($validatedData);
            } else {
                CMS::create($validatedData);
            }

            return redirect()->route("admin.cms.home.{$this->section}.index")->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }

}
