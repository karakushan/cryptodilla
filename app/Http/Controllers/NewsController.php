<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = __('News');
        $items = News::orderBy('id', 'desc')->paginate(15);

        return view('dashboard.news.index', compact('title', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = __('Adding a News');
        $categories = NewsCategory::all();


        return view('dashboard.news.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        app()->setLocale($request->input('lang',config('app.fallback_locale')));
        News::create($request->all());

        return redirect()->route('news.index')->with([
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
        $item = News::findOrFail($id);
        $categories = NewsCategory::all();

        $title = __('Editing News');

        return view('dashboard.news.edit', compact('title', 'item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $item = News::findOrFail($id)
            ->setLocale($request->input('lang',config('app.fallback_locale')));
        $item->fill($request->all());
        $item->save();

        return redirect()->route('news.index')->with([
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
        $item = News::findOrFail($id);
        $item->delete();

        return redirect()->route('news.index')->with([
            'status' => 'success',
            'message' => __('Object deleted successfully!')
        ]);
    }

    public function getNews()
    {
        $news = News::paginate();

        return response()->json($news);
    }

    /**
     * Возвращает одну новость
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSingleNews($id)
    {
        $item = News::findOrFail($id);

        return response()->json($item);
    }
}
