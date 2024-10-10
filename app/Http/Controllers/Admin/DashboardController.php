<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patient;
use App\Models\Staff;
use App\Models\Medicine;
use App\Models\Equipment;
use App\Models\Resource;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Dynamic data for statistics
        $totalUsers = User::count();
        $totalPatients = Patient::count();
        $totalStaff = User::where('usertype', 'staff')->count();
        $medicineInventory = Medicine::count();
        $suppliesInventory = Equipment::count();
        $appointmentsCount = 75;
        $resourcesCount = Resource::count();

        $recentActivities = [
            ['activity' => 'Dr. Smith performed a surgery', 'date' => 'July 10, 2024'],
            ['activity' => 'New patient John Doe registered', 'date' => 'July 9, 2024'],
            ['activity' => 'Nurse Jane updated her schedule', 'date' => 'July 8, 2024'],
            ['activity' => 'Monthly staff meeting held', 'date' => 'July 7, 2024'],
            ['activity' => 'New equipment purchased for surgery department', 'date' => 'July 6, 2024'],
        ];

        return view('admin.dashboard', compact('totalUsers', 'totalPatients', 'totalStaff', 'medicineInventory', 'suppliesInventory', 'appointmentsCount', 'recentActivities', 'resourcesCount'));
    }
}
