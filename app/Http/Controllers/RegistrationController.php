<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Collection; // Import Collection class

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'electoral_area' => 'required',
                'polling' => 'required|string|max:255',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'categories' => 'required',
                'decisions' => 'required',
            ], [
                'required' => 'The :attribute field is required.',
            'max' => 'The :attribute field should not exceed :max characters.',
            ]);


            // Create a new Registration record in the database
            $registration = Registration::create($validatedData);




            // Redirect back to the form with a success message
            return view('success')->with('stop_loader', true)->with('success', 'Form submitted successfully!');
        } catch (\Exception $e) {
            // Handle exceptions
            return back()->with('error', $e->getMessage());
        }
    }

    public function display(){
        $registrations = Registration::all();

        return view('display', ['registrations' => $registrations]);
    }

    public function home(){
        return view('Frontend.index');
    }
    public function percentage()
    {
        // Get the percentages of decisions based on the electoral area
        $percentages = Registration::select('electoral_area')
            ->selectRaw('SUM(CASE WHEN decisions = "Yes" THEN 1 ELSE 0 END) / COUNT(*) * 100 AS percentage_yes')
            ->selectRaw('SUM(CASE WHEN decisions = "Somewhat" THEN 1 ELSE 0 END) / COUNT(*) * 100 AS percentage_somewhat')
            ->selectRaw('SUM(CASE WHEN decisions = "No" THEN 1 ELSE 0 END) / COUNT(*) * 100 AS percentage_no')
            ->groupBy('electoral_area')
            ->get();
    
        return view('percentage', compact('percentages'));
    }
    


    
}
