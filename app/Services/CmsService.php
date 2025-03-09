<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Helpers\Helper;
use App\Models\CMS;
use Exception;


class CmsService
{
    public function destroy($id)
    {
        try {
            $data = CMS::findOrFail($id);

            if ($data->bg && file_exists(public_path($data->bg))) {
                Helper::fileDelete(public_path($data->bg));
            }

            if ($data->image && file_exists(public_path($data->image))) {
                Helper::fileDelete(public_path($data->image));
            }

            $data->delete();
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function status($id)
    {
        try {
            $data = CMS::findOrFail($id);
            $data->status = $data->status === 'active' ? 'inactive' : 'active';
            $data->save();
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }
    
}
