<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $all_months = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];
        $transaction = Transaction::select(DB::raw("MONTHNAME(created_at) as month"), DB::raw('SUM(amount) as total'))
            ->where('status', 'success')
            ->groupBy('month')
            ->get()
            ->mapWithKeys(function ($item) {
                return [strtolower($item->month) => number_format($item->total, 2)];
            });
        $transaction = collect($all_months)->mapWithKeys(function ($month) use ($transaction) {
            return [$month => $transaction->get($month, '0.00')];
        });
        if (file_exists(public_path('transactions.json'))){
            $transaction_json = $transaction->toJson();
            file_put_contents(public_path('transactions.json'), $transaction_json);
        }

        return view('backend.layouts.dashboard');
    }
}
