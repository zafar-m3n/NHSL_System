<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the patients.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('staff.patients.index', compact('patients'));
    }

    /**
     * Display the specified patient details.
     */
    public function show(Patient $patient)
    {
        $patient->appointment_history = json_decode($patient->appointment_history, true);
        $patient->medical_history = json_decode($patient->medical_history, true);
        return view('staff.patients.show', compact('patient'));
    }
}
