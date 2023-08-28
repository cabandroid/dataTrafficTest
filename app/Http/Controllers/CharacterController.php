<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = DB::table('characters')->get();
        $characters = Character::paginate(10);
        return view('characters.index', compact('characters'));
    }

    public function show($id)
    {
        $character = DB::table('characters')->find($id);
        if (!$character) {
            return response()->json(['error' => 'Character not found'], 404);
        }
        return response()->json($character);
    }

    public function store(Request $request)
{
    $character = new Character;
    $character->name = $request->input('name');
    $character->status = $request->input('status');
    $character->save();
    return redirect('character');
}


public function update(Request $request, $id)
{
    $character = Character::find($id);

    if (!$character) {
        return redirect('characters')->with('error', 'Personaje no encontrado.');
    }
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $character->name = $request->input('name');
    $character->status = $request->input('status');
    $character->save();
    return redirect('character')->with('success', 'Personaje actualizado correctamente.');
}

    public function edit($id)
    {
        $character = Character::find($id);

        if (!$character) {
            return redirect('characters')->with('error', 'Personaje no encontrado.');
        }

        return view('characters.edit', compact('character'));
    }


    public function destroy($id)
    {
        $character = Character::find($id);

        if (!$character) {
            return redirect('character')->with('error', 'Personaje no encontrado.');
        }
        $character->delete();
        return redirect('character')->with('success', 'Personaje eliminado correctamente.');
    }

}
