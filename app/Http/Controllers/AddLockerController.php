<?php

namespace App\Http\Controllers;

use App\Models\Addlocker;
use Illuminate\Http\Request;

class AddLockerController extends Controller
{
    // Display all lockers
    public function index()
    {
        $lockers = Addlocker::all();
        return response()->json($lockers);
    }

    // Store a new locker
    public function store(Request $request)
    {
        $validated = $request->validate([
            'locker_number' => 'required|unique:lockers',
            'status' => 'required',
            'student_last_name' => 'required',
            'student_first_name' => 'required',
            'student_id' => 'required',
            'course' => 'required',
            'year' => 'required',
            'set' => 'required',
            'email' => 'required|email',
        ]);

        $locker = Addlocker::create($validated);

        return response()->json($locker->makeHidden(['created_at', 'updated_at']), 201);
    }

    // Update locker details
    public function update(Request $request, $id)
    {
        $locker = Addlocker::find($id);

        if (!$locker) {
            return response()->json(['message' => 'Locker not found. Please check the locker ID.'], 404);
        }

        $validated = $request->validate([
            'locker_number' => 'required|unique:lockers,locker_number,' . $locker->id,
            'status' => 'required',
            'student_last_name' => 'required',
            'student_first_name' => 'required',
            'student_id' => 'required',
            'course' => 'required',
            'year' => 'required',
            'set' => 'required',
            'email' => 'required|email',
        ]);

        $locker->update($validated);

        return response()->json($locker->makeHidden(['created_at', 'updated_at']));
    }

    // Delete a locker
    public function destroy($id)
    {
        $locker = Addlocker::find($id);

        if (!$locker) {
            return response()->json(['message' => 'Locker not found. Please check the locker ID.'], 404);
        }

        $locker->delete();

        return response()->json(['message' => 'Locker deleted']);
    }
}
