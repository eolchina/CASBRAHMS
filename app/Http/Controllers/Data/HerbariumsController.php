<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Models\Herbarium;
use App\Http\Controllers\Controller;

class HerbariumsController extends Controller
{

    public function index()
    {
        $herbariums = Herbarium::all();
        return view('data.herbariums.index', compact('herbariums'));
    }

    public function edit(Herbarium $herbarium)
    {
        return view('data.herbariums.edit', compact('herbarium'));
    }

    public function destroy(Herbarium $herbarium)
    {
        $herbarium->delete();
        return back();
    }

    public function update()
    {
        # code...
    }
}
