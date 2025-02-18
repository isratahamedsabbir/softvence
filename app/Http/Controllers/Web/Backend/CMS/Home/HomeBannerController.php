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

class HomeBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CMS::where('page', PageEnum::HOME)->where('section', SectionEnum::HOME_BANNERS)->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($data) {
                    if ($data->image) {
                        $url = asset($data->image);
                        return '<img src="' . $url . '" alt="image" width="50px" height="50px" style="margin-left:20px;">';
                    } else {
                        return '<span>No Image Available</span>';
                    }
                })
                ->addColumn('status', function ($data) {
                    $backgroundColor = $data->status == "active" ? '#4CAF50' : '#ccc';
                    $sliderTranslateX = $data->status == "active" ? '26px' : '2px';
                    $sliderStyles = "position: absolute; top: 2px; left: 2px; width: 20px; height: 20px; background-color: white; border-radius: 50%; transition: transform 0.3s ease; transform: translateX($sliderTranslateX);";

                    $status = '<div class="form-check form-switch" style="margin-left:40px; position: relative; width: 50px; height: 24px; background-color: ' . $backgroundColor . '; border-radius: 12px; transition: background-color 0.3s ease; cursor: pointer;">';
                    $status .= '<input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status" style="position: absolute; width: 100%; height: 100%; opacity: 0; z-index: 2; cursor: pointer;">';
                    $status .= '<span style="' . $sliderStyles . '"></span>';
                    $status .= '<label for="customSwitch' . $data->id . '" class="form-check-label" style="margin-left: 10px;"></label>';
                    $status .= '</div>';

                    return $status;
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="' . route('admin.cms.home.banner.edit', ['id' => $data->id]) . '" type="button" class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
                                    <i class="fe fe-edit"></i>
                                </a>

                                <a href="#" type="button" onclick="showDeleteConfirm(' . $data->id . ')" class="btn btn-danger fs-14 text-white delete-icn" title="Delete">
                                    <i class="fe fe-trash"></i>
                                </a>
                            </div>';
                })
                ->rawColumns(['image', 'status', 'action'])
                ->make();
        }

        $banner = CMS::where('page', PageEnum::HOME)->where('section', SectionEnum::HOME_BANNER)->latest()->first();

        return view("backend.layouts.cms.home.banner.index", compact("banner"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.layouts.cms.home.banner.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'btn_text' => 'required|string|max:50',
            'btn_link' => 'required|string|max:100',
        ]);

        try {
            // Add the page and section to validated data
            $validatedData['page'] = PageEnum::HOME->value;
            $validatedData['section'] = SectionEnum::HOME_BANNERS->value;

            $counting = CMS::where('page', $validatedData['page'])->where('section', $validatedData['section'])->count(); 
            if ($counting >= 3) {
                return redirect()->back()->with('t-error', 'Maximum 3 Item You Can Add');
            }

            if ($request->hasFile('image')) {
                $validatedData['image'] = Helper::fileUpload($request->file('image'), 'banner', time() . '_' . getFileName($request->file('image')));
            }

            // Create or update the CMS entry
            CMS::create($validatedData);

            return redirect()->route('admin.cms.home.banner.index')->with('t-success', 'Created successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $banner = CMS::findOrFail($id);
        return view("backend.layouts.cms.home.banner.update", compact("banner"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = CMS::findOrFail($id);
        return view("backend.layouts.cms.home.banner.update", compact("banner"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'btn_text' => 'required|string|max:50',
            'btn_link' => 'required|string|max:100',
        ]);

        try {
            // Find the existing CMS record by ID
            $Review = CMS::findOrFail($id);

            // Update the page and section if necessary
            $validatedData['page'] = PageEnum::HOME->value;
            $validatedData['section'] = SectionEnum::HOME_BANNERS->value;

            // Check if an image is being uploaded
            if ($request->hasFile('image')) {
                // If there is an existing image, delete it
                if ($Review->image && file_exists(public_path($Review->image))) {
                    Helper::fileDelete(public_path($Review->image));
                }

                // Upload the new image
                $validatedData['image'] = Helper::fileUpload($request->file('image'), 'banner', time() . '_' . getFileName($request->file('image')));
            }

            // Update the CMS entry with the validated data
            $Review->update($validatedData);
            return redirect()->route('admin.cms.home.banner.index')->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Find the CMS entry by ID
            $data = CMS::findOrFail($id);

            // Check if there is an image associated with this CMS entry
            if ($data->image && file_exists(public_path($data->image))) {
                // Delete the image file from the server
                Helper::fileDelete(public_path($data->image));
            }

            // Delete the CMS entry
            $data->delete();

            return response()->json([
                't-success' => true,
                'message' => 'Deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                't-success' => false,
                'message' => 'Failed to delete.',
            ]);
        }
    }

    public function status(int $id): JsonResponse
    {
        // Find the CMS entry by ID
        $data = CMS::findOrFail($id);

        // Check if the record was found
        if (!$data) {
            return response()->json([
                "success" => false,
                "message" => "Item not found.",
                "data" => $data,
            ]);
        }

        // Toggle the status
        $data->status = $data->status === 'active' ? 'inactive' : 'active';

        // Save the changes
        $data->save();

        return response()->json([
            't-success' => true,
            'message' => 'Item status changed successfully.',
            'data'    => $data,
        ]);
    }

    public function content(Request $request)
    {
        
        $validatedData = request()->validate([
            'title'       => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'btn_text'    => 'required|string|max:255',
            'btn_link'    => 'required|string|max:255',
        ]);
        try {
            $validatedData['page'] = PageEnum::HOME->value;
            $validatedData['section'] = SectionEnum::HOME_BANNER->value;
            if ($request->hasFile('image')) {
                $validatedData['image'] = Helper::fileUpload($request->file('image'), 'cms', time() . '_' . getFileName($request->file('image')));
            }

            if (CMS::where('page', $validatedData['page'])->where('section', $validatedData['section'])->exists()) {
                CMS::where('page', $validatedData['page'])->where('section', $validatedData['section'])->update($validatedData);
            } else {
                CMS::create($validatedData);
            }

            return redirect()->route('admin.cms.home.banner.index')->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }

}
