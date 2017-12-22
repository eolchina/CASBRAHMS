<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use App\Models\Taxonomyterm;

class TaxonomytermsController extends Controller
{
     /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $taxonomyterms = Datatables::of(Taxonomyterm::query())->toJson();
        return view('data.taxonomyterms.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function data(Datatables $datatables)
    {
        $builder = Taxonomyterm::query()->select('id', 'parent_id', 'lft', 'rgt', 'depth', 'name', 'created_at', 'updated_at');
         return $datatables->eloquent($builder)
                          ->editColumn('name', function ($taxonomyterm) {
                              return '<a>' . $taxonomyterm->name . '</a>';
                          })
                          ->addColumn('action', 'taxonomterm.tables.taxonomyterms-action')
                          ->rawColumns([1, 8])
                          ->make();
    }
}
