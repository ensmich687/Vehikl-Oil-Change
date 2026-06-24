<?php

namespace App\Http\Controllers;

use App\Models\OilChange;
use Illuminate\Http\Request;

class OilChangeController extends Controller
{
    /**
     * Display List of Oil Change resource
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Form rendering to create Oil Change
     */
    public function create()
    {
        return view('OilChange.create');
    }

    /**
     * Create an Oil Change Resource
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'currentOdometer' => ['required', 'numeric'],
            'previousOdometer'=> ['required', 'numeric', 'lt:currentOdometer'],
            'previousDate'=> ['required', 'date', 'before:today'],
        ]);

        $oilChange = OilChange::create($validated);
        return redirect()->route('OilChange.show', [$oilChange->id]);
    }

    /**
     * Displays the Oil Change resource
     */
    public function show(string $id)
    {
        $oilChange = OilChange::findOrFail($id);
        return view("OilChange.show", compact('oilChange'));
    }

    /**
     * Render Edit form for Oil Change resource
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update an existing Oil Change resource
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Delete an existing Oil Change resource
     */
    public function destroy($id)
    {
        //
    }
}