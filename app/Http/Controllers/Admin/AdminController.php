<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use App\Models\Instructor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $equipments = Equipment::all();
        $totalEquipments = $equipments->count();
        $damagedEquipments = $equipments->where('damaged', 1)->count();
        $inMaintenanceEquipments = $equipments->where('in_maintenance', 1)->count();

        $instructors = Instructor::all();
        $totalInstructors = $instructors->count();

        return view('admin.dashboard', compact('totalEquipments', 'damagedEquipments', 'inMaintenanceEquipments','totalInstructors'));
    }
    public function equipmentsReport(Request $request)
    {
        $equipments = Equipment::paginate(10);

        return view('admin.equipments.report', compact('equipments'));
    }
    public function equipmentsRegister(Request $request)
    {
        return view('admin.equipments.register');
    }
    public function postEquipments(Request $request)
    {
        $data = $request->only(['name', 'quantity   ', 'manufacturer', 'color', 'weight', 'type', 'damaged', 'in_maintenance']);
        $equipment = Equipment::create($data);
        return redirect()->back()->with('success', 'Formulário enviado com sucesso!');
    }
}
