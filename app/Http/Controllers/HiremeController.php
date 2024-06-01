<?php

// app/Http/Controllers/HireMeController.php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hire;

class HireMeController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all()); // Debugging statement

        $validatedData = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date' => 'required|date',
            'plan' => 'required|string',
            'location' => 'required|string',
        ]);
    
        Hire::create($validatedData);
    
        return redirect()->back()->with('success', 'Data submitted successfully!');
    }
    
    public function client(){
        $clients = Hire::all();
        return view('reservations', compact('clients'));
}
}
