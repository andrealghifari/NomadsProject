<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'total_transactions' => Transaction::count(),
            'trans_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'trans_success' => Transaction::where('transaction_status', 'SUCCESS')->count()

        ]);
    }
}
