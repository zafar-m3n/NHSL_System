<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the schedules for the authenticated staff.
     */
    public function index()
    {
        $schedules = Schedule::where('staff_id', Auth::id())->get();
        return view('staff.schedules.index', compact('schedules'));
    }

    /**
     * Show the details of a single schedule.
     */
    public function show($id)
    {
        $schedule = Schedule::where('id', $id)->where('staff_id', Auth::id())->firstOrFail();
        return view('staff.schedules.show', compact('schedule'));
    }
}
