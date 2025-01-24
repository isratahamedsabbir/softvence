<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class NotificationController extends Controller
{
    public function index()
    {
        try {
            $notifications = auth('web')->user()->unreadNotifications()->latest()->paginate(10);
            return response()->json([
                'status' => 't-success',
                'message' => 'Your action was successful!',
                'data' => $notifications
            ]);
        } catch (Exception $e) {
            return response()->json(['t-error' => $e->getMessage()], 500);
        }
    }
    public function readSingle($id)
    {
        $notification = auth('web')->user()->notifications()->find($id);
        if (!$notification) {
            return response()->json([
                'code' => 404,
                'status' => 't-error',
                'message' => 'Item not found.',
            ], 404);
        }
        $notification->markAsRead();
        return response()->json([
            'code' => 200,
            'status' => 't-success',
            'message' => 'Your action was successful!',
            'data' => $notification
        ], 200);
    }
    public function readAll()
    {
        alert('All notifications have been marked as read.');
        try {
            auth('web')->user()->notifications->markAsRead();
            return response()->json([
                'code' => 200,
                'status' => 't-success',
                'message' => 'All notifications have been marked as read.',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'code' => 500,
                'status' => 't-error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
