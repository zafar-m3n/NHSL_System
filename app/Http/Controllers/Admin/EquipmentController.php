<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::all();
        return view('admin.equipment.index', compact('equipment'));
    }

    public function create()
    {
        return view('admin.equipment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
            'purchase_date' => 'required|date',
            'status' => 'required|string',
        ]);

        Equipment::create($request->all());

        return redirect()->route('admin.equipment.index')->with('success', 'Equipment created successfully.');
    }

    public function edit(Equipment $equipment)
    {
        return view('admin.equipment.edit', compact('equipment'));
    }

    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
            'purchase_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $equipment->update($request->all());

        return redirect()->route('admin.equipment.index')->with('success', 'Equipment updated successfully.');
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();

        return redirect()->route('admin.equipment.index')->with('success', 'Equipment deleted successfully.');
    }
}
