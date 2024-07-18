<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $query = Appointment::query();

        if ($request->has('filter')) {
            switch ($request->filter) {
                case 'expired_or_confirmed':
                    $query->where(function ($query) {
                        $query->where('status', 'confirmed')
                            ->orWhere('scheduled_date', '<', Carbon::today());
                    });
                    break;
                case 'pending_and_not_expired':
                    $query->where('status', 'pending')
                        ->where('scheduled_date', '>=', Carbon::today());
                    break;
                default:
                    break;
            }
        } else {
            $query->where('status', 'pending')
                ->where('scheduled_date', '>=', Carbon::today());
        }

        $appointments = $query->paginate(10);

        return view('admin.appointments.index', compact('appointments'));
    }

    public function create()
    {
        $appointment = new Appointment();
        return view('admin.appointments.create', compact('appointment'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'scheduled_date' => 'required|date',
            'scheduled_time' => 'required',
            'user_id' => 'required|numeric'
        ]);

        Appointment::create($request->all());

        return redirect()->route('appointments.index')
            ->with('success', 'تم إنشاء الموعد بنجاح.');
    }

    public function show(Appointment $appointment)
    {
        return view('admin.appointments.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        return view('admin.appointments.edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'scheduled_date' => 'required|date',
            'scheduled_time' => 'required',
            'user_id' => 'required|numeric'
        ]);

        $appointment->update($request->all());

        return redirect()->route('appointments.index')
            ->with('success', 'تم تحديث الموعد بنجاح.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')
            ->with('success', 'تم حذف الموعد بنجاح.');
    }

    public function markDonated(Appointment $appointment)
    {
        $appointment->update(['status' => 'confirmed']);

        return redirect()->route('appointments.index')
            ->with('success', 'تمت علامة الموعد كتبرع بنجاح.');
    }
}
