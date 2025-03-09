<?php

namespace App\Repositories;

use App\Helpers\Helper;
use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all()
    {
        return Category::all();
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function create(array $data)
    {
        if (isset($data['image'])) {
            $data['image'] = Helper::fileUpload($data['image'], 'category', time() . '_' . getFileName($data['image']));
        }
        
        $data['slug'] = Helper::makeSlug(Category::class, $data['name']);

        Category::create($data);
    }

    public function update($id, array $data)
    {
        $category = Category::findOrFail($id);

        if (isset($data['image'])) {
            if ($category->image && file_exists(public_path($category->image))) {
                Helper::fileDelete(public_path($category->image));
            }
            $data['image'] = Helper::fileUpload($data['image'], 'category', time() . '_' . getFileName($data['image']));
        }

        $category->update($data);
    }

    public function delete($id)
    {
        $data = Category::findOrFail($id);
        if ($data->image && file_exists(public_path($data->image))) {
            Helper::fileDelete(public_path($data->image));
        }
        $data->delete();
    }
    public function status($id)
    {
        $data = Category::findOrFail($id);
        if (!$data) {
            return response()->json([
                'status' => 't-error',
                'message' => 'Item not found.',
            ]);
        }
        $data->status = $data->status === 'active' ? 'inactive' : 'active';
        $data->save();
    }
}
