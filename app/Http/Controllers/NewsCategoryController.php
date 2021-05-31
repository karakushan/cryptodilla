<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCategoryRequest;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = __('News Categories');
        $items = NewsCategory::orderBy('id', 'desc')->paginate(15);

        return view('dashboard.news-category.index', compact('title', 'items'));
    }

    /**
     * Возвращает категории новостей
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll()
    {
        $items = NewsCategory::latest()->get();

        return response()->json($items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = __('Adding a  News Category');

        return view('dashboard.news-category.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsCategoryRequest $request)
    {
        NewsCategory::create($request->all());

        return redirect()->route('news-category.index')->with([
            'status' => 'success',
            'message' => __('Object added successfully!')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = NewsCategory::findOrFail($id);

        $title = __('Editing News Category');

        return view('dashboard.news-category.edit', compact('title', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsCategoryRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsCategoryRequest $request, $id)
    {
        $item = NewsCategory::findOrFail($id);
        $item->fill($request->all());
        $item->save();

        return redirect()->route('news-category.index')->with([
            'status' => 'success',
            'message' => __('Data updated successfully!')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = NewsCategory::findOrFail($id);
        $item->delete();

        return redirect()->route('news-category.index')->with([
            'status' => 'success',
            'message' => __('Object deleted successfully!')
        ]);
    }
}
