<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAppointmentController extends Controller
{
    public function index(Request $request)
    {
        $query = Appointment::query();
        $user = Auth::user();

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
        $query->where('user_id', $user->getAuthIdentifier());

        $appointments = $query->paginate(10);

        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $appointment = new Appointment();
        return view('appointments.create', compact('appointment'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'scheduled_date' => 'required|date',
            'scheduled_time' => 'required',
            'user_id' => 'required|numeric'
        ]);

        // Check if the user has donated in the past three months
        $userId = auth::user()->getAuthIdentifier();
        $scheduledDate = Carbon::parse($request->input('scheduled_date'));

        // Calculate the date three months before the scheduled date
        $threeMonthsAgo = $scheduledDate->subMonths(3)->toDateString();

        $recentDonations = Appointment::where('user_id', $userId)
            ->where('scheduled_date', '>=', $threeMonthsAgo)
            ->count();

        if ($recentDonations > 0) {
            return redirect()->route('userappoinment.index')
                ->with('error', 'لا يمكنك التبرع مرة أخرى خلال ثلاثة أشهر.');
        }

        // Create the appointment if the user has not donated in the past three months
        Appointment::create([
            'scheduled_date' => $request->input('scheduled_date'),
            'scheduled_time' => $request->input('scheduled_time'),
            'user_id' => auth::user()->getAuthIdentifier()
        ]);

        return redirect()->route('userappoinment.index')
            ->with('success', 'تم إنشاء الموعد بنجاح.');
    }

    public function show(Appointment $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }

    public function edit(Appointment $userappoinment)
    {
        return view('appointments.edit', compact('userappoinment'));
    }

    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $request->validate([
            'scheduled_date' => 'required|date',
            'scheduled_time' => 'required',
            'user_id' => 'required|numeric'
        ]);

        $appointment->update($request->all());

        return redirect()->route('userappoinment.index')
            ->with('success', 'تم تحديث الموعد بنجاح.');
    }

    public function destroy(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('userappoinment.index')
            ->with('success', 'تم حذف الموعد بنجاح.');
    }
}
