<?php

// MeetingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::all();
        return view('calendar', compact('meetings'));
    }

    public function create()
    {
        return view('meetings.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new meeting
        // ...

        return redirect()->route('calendar.index')->with('success', 'Meeting added successfully.');
    }
}
