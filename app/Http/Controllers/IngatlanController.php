<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;
use Illuminate\Http\Request;

class IngatlanController extends Controller
{
  


    public function index()
    {
        return Ingatlan::all();
    }


    public function store(Request $request)
    {
        $user = new Ingatlan();
        $user->fill($request->all());
        $user->save();
        return response()->json($user, 201);
    }


    public function destroy(string $id)
    {
        $user = Ingatlan::find($id);
        $user->delete();
        return response()->json(NULL, 200);
    }

    public function categoryWithIngatlans() {
        return Category::with("ingatlanok")->get();
    }

}
