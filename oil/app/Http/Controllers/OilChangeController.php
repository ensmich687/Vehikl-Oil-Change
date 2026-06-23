<?php

namespace App\Http\Controllers;

use App\Models\OilChange;
use Illuminate\Http\Request;

class OilChanController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('OilChange.create');
    }

    /**
     * Displas the oil change resource
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'currentOdometer' => ['required', 'numeric'],
            'previousOdometer'=> ['requried', 'numeric', 'gt:currentOdometer'],
            'previousDate'=> ['required', 'date', 'before:today'],
        ]);

        $oilChange = OilChange::create($validated);
        return redirect()->route('OilChange.show', [$oilChange->id]);
    }

    public function show(string $id)
    {
        $oilChange = OilChange::findOrFail($id);
        return view("OilChange.show", compact('oilChange'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}