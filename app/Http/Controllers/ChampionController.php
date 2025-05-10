<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $champions = Champion::all();
        return response()->json([
            'success' => true,
            'data' => $champions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Champion $champion)
    {
        $champion->load([
            'abilities', 
            'skins', 
            'rework.abilities' // Εμφωλευμένες σχέσεις: rework και abilities του rework
        ]);
        
        return response()->json([
            'success' => true,
            'data' => $champion
        ]);
    }

    /**
     * Επιστρέφει champions με φιλτράρισμα βάσει ρόλου
     */
    public function getChampionsByRole(Request $request, $role)
    {
        $champions = Champion::where('role', $role)->get();
        
        return response()->json([
            'success' => true,
            'data' => $champions
        ]);
    }

    /**
     * Αναζήτηση champions βάσει ονόματος, τίτλου ή περιοχής
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $champions = Champion::where('name', 'like', "%{$query}%")
            ->orWhere('title', 'like', "%{$query}%")
            ->orWhere('region', 'like', "%{$query}%")
            ->get();
        
        return response()->json([
            'success' => true,
            'data' => $champions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
