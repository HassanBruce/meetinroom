<?php

// app/Http/Controllers/MeetingBookingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;
use App\Models\Employee;

class MeetingBookingController extends Controller
{
    public function create()
    {
        $employees = Employee::all();
        return view('meetings.create', compact('employees'));
    }

    public function store(Request $request)
    {
        // Validate and store the new meeting
        $validatedData = $request->validate([
            'title' => 'required|string',
            'organizer' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'participants' => 'required|array',
        ]);

        $meeting = Meeting::create($validatedData);
        $meeting->participants()->attach($request->input('participants'));

        return redirect()->route('meetings.create')->with('success', 'Meeting booked successfully.');
    }
}
