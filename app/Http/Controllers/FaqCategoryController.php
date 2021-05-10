<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqCategoryRequest;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = __('FAQ Categories');
        $items = FaqCategory::orderBy('id','desc')->paginate(15);

        return view('dashboard.faq-category.index', compact('title', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = __('Adding a Faq Category');

        return view('dashboard.faq-category.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqCategoryRequest $request)
    {
        FaqCategory::create($request->all());

        return redirect()->route('faq-categories.index')->with([
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
        $item = FaqCategory::findOrFail($id);

        $title = __('Editing FAQ Category');

        return view('dashboard.faq-category.edit', compact('title', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqCategoryRequest $request, $id)
    {
        $item = FaqCategory::findOrFail($id);
        $item->fill($request->all());
        $item->save();

        return redirect()->route('faq-categories.index')->with([
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
        $item = FaqCategory::findOrFail($id);
        $item->delete();

        return redirect()->route('faq-categories.index')->with([
            'status' => 'success',
            'message' => __('Object deleted successfully!')
        ]);
    }
}
