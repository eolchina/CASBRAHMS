<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Models\Herbarium;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Data\StoreHerbariumsRequest;
use App\Http\Requests\Data\UpdateHerbariumsRequest;

class HerbariumsController extends Controller
{

    public function index()
    {
        $herbariums = Herbarium::all();
        return view('data.herbariums.index', compact('herbariums'));
    }

    public function create()
    {
        if (! Gate::allows('herbariums_manage')) {
            return abort(401);
        }

        return view('data.herbariums.create');
    }

    public function store(StoreHerbariumsRequest $request)
    {
        if (! Gate::allows('herbariums_manage')) {
            return abort(401);
        }
        $herbarium = Herbarium::create($request->all());

        return redirect()->route('data.herbariums.index');
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


    public function update(UpdateHerbariumsRequest $request, $id)
    {
        if (! Gate::allows('herbariums_manage')) {
            return abort(401);
        }

        $herbarium = Herbarium::findOrFail($id);
        $herbarium->update($request->all());
        return redirect()->route('data.herbariums.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Herbariums::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
