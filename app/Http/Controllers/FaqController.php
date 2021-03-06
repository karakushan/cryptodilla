<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Http\Resources\FaqCollection;
use App\Http\Resources\FaqResource;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = __('Frequently Asked Questions');
        $items = Faq::orderBy('id', 'desc')->paginate(15);

        return view('dashboard.faq.index', compact('title', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = __('Adding a FAQ');
        $categories = FaqCategory::all();

        return view('dashboard.faq.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        app()->setLocale($request->input('lang', config('app.fallback_locale')));
        Faq::create($request->all());

        return redirect()->route('faqs.index')->with([
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
        $item = Faq::findOrFail($id);

        $title = __('Editing FAQ');
        $categories = FaqCategory::all();

        return view('dashboard.faq.edit', compact('title', 'item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Faq::findOrFail($id)->setLocale($request->input('lang', config('app.fallback_locale')));
        $item->fill($request->all());
        $item->save();

        return redirect()->route('faqs.index')->with([
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
        $item = Faq::findOrFail($id);
        $item->delete();

        return redirect()->route('faqs.index')->with([
            'status' => 'success',
            'message' => __('Object deleted successfully!')
        ]);
    }

    /**
     * ???????????????????? ???????????? FAQ
     *
     * @param string $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getFaqs($id = '')
    {
        $faqs = Faq::when($id, function ($query) use ($id) {
            $query->where('faq_category_id', $id);
        })
            ->get();
        return FaqResource::collection($faqs);
    }

    /**
     * ???????????????????? ???????? FAQ
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getItem($id)
    {
        $faq = Faq::findOrFail($id);

        return response()->json($faq);
    }
}
