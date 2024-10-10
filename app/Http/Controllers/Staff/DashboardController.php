<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Dynamic data
        $patientsCount = Patient::count();
        $staffSchedules = Schedule::where('staff_id', Auth::id())->get(); // Assuming Schedule model exists
        $patients = Patient::latest()->limit(5)->get();

        // Static data for recent appointments
        $recentAppointments = [
            [
                'date' => '2023-09-10',
                'patient' => 'John Doe',
                'reason' => 'Routine checkup',
            ],
            [
                'date' => '2023-09-12',
                'patient' => 'Jane Smith',
                'reason' => 'Consultation',
            ],
            [
                'date' => '2023-09-15',
                'patient' => 'Robert Johnson',
                'reason' => 'Follow-up visit',
            ],
            [
                'date' => '2023-09-20',
                'patient' => 'Emily Davis',
                'reason' => 'X-ray appointment',
            ],
            [
                'date' => '2023-09-25',
                'patient' => 'Michael Brown',
                'reason' => 'Dental cleaning',
            ],
        ];

        return view('staff.dashboard', compact('patientsCount', 'staffSchedules', 'recentAppointments', 'patients'));
    }
}
