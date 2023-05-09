<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestPostRequest;
use App\Models\Guest;
use App\Models\Score;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuestPostRequest $request)
    {
        $guest = Guest::create([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);
        
        Score::create([
            'guest_id' => $guest->id,
            'x_value' => $request->input('x-value'),
            'y_value' => $request->input('y-value'),
            'z_value' => $request->input('z-value'),
            'w_value' => $request->input('w-value'),
        ]);

        return redirect()->route('home')->with('success', 'New Users Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Guest::with('score')->findOrFail($id);

        $data->intelligentAspectScore = round((0.4 * $data->score->x_value + 0.6 * $data->score->y_value) / 2);

        $data->numericalAbilityAspectScore = round((0.3 * $data->score->z_value + 0.7 * $data->score->w_value) / 2);

        return view('guest.show')->with('data', $data);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Guest::with('score')->findOrFail($id);
        return view('guest.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guest = Guest::findOrFail($id);

        $guestUpdate = $guest->update([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);
        
        $guest->score()->update([
            'guest_id' => $guest->id,
            'x_value' => $request->input('x-value'),
            'y_value' => $request->input('y-value'),
            'z_value' => $request->input('z-value'),
            'w_value' => $request->input('w-value'),
        ]);

        return redirect()->route('home')->with('success', 'User Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guest = Guest::findOrFail($id);
        $guest->delete();

        return redirect()->route('home')->with('success', 'User Data Deleted');
    }
}
