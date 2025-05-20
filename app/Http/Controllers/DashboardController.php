<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get all tenants data
        $tenants = Tenant::orderBy('created_at', 'desc')->get();

        // Calculate stats
        $totalTenants = Tenant::count();
        $totalBalance = Tenant::sum('amount');
        $pendingRequests = Tenant::where('status', 'overdue')->count();

        // You'll need to adjust this based on how you track available rooms
        $roomsAvailable = 376; // This should come from your Room model

        return view('admin_dashboard', [
            'tenants' => $tenants,
            'totalTenants' => $totalTenants,
            'totalBalance' => $totalBalance,
            'pendingRequests' => $pendingRequests,
            'roomsAvailable' => $roomsAvailable
        ]);
    }
}
