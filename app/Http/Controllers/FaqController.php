<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Brian2694\Toastr\Facades\Toastr;
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
        return view('admin.faq.index',[
            'faqs' => Faq::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'section' => 'required',
        ]);
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->section = $request->section;
        $faq->meta_keywords = $request->meta_keywords;
        $faq->meta_description = $request->meta_description;
        $faq->save();
        Toastr::success('Faq created successfully', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit',[
            'faq' => $faq,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'section' => 'required',
        ]);
        $faq = Faq::find($faq->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->section = $request->section;
        $faq->meta_keywords = $request->meta_keywords;
        $faq->meta_description = $request->meta_description;
        $faq->save();
        Toastr::success('Faq updated successfully', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq = Faq::find($faq->id);
        $faq->delete();
        Toastr::warning('Faq deleted successfully', 'Success');
        return back();
    }
    public function faq()
    {
        return view('faq',[
            'general' => Faq::where('section','1')->get(),
            'undergraduate' => Faq::where('section','2')->get(),
            'postgraduate' => Faq::where('section','3')->get(),
            'certificates' => Faq::where('section','4')->get(),
            'library' => Faq::where('section','5')->get(),
            'title' => 'Frequently Asked Questions',
        ]);
    }
}
