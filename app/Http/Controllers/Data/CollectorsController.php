<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Models\Collector;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Data\StoreCollectorsRequest;
use App\Http\Requests\Data\UpdateCollectosRequest;

class CollectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collectors = Collector::all();
        return view('data.collectors.index', compact('collectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('herbariums_manage')) {
            return abort(401);
        }
         return view('data.collectors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollectorsRequest $request)
    {
        if (! Gate::allows('herbariums_manage')) {
            return abort(401);
        }
        $collector = Collector::create($request->all());

        return redirect()->route('data.collectors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('collectors.show', compact('collector'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collector $collector)
    {

        return view('data.collectors.edit', compact('collector'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollectorRequest $request, $id)
    {
        if (! Gate::allows('herbariums_manage')) {
            return abort(401);
        }

        $collector = Collector::findOrFail($id);
        $collector->update($request->all());
        return redirect('data.collectors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collector $collector)
    {
        $this->authorize('destroy', $collector);
        $collector->delete();
        session()->flash('success', '成功删除采集人！');
        return back();
    }
}
