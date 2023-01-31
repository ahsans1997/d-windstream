<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.form.index',[
            'forms' => Form::orderBy('id', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form.create');
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
            'title' => 'required',
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);
        $form = new Form();
        $form->title = $request->title;
        $form->slug = Str::slug($request->title, '-');
        if($request->hasFile('file')){
            $path = Storage::putFile('file', $request->file('file'));
            $form->file = $path;
        }
        $form->save();
        Toastr::success('Form Added Successfully', 'Success');
        return redirect()->route('form.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        return view('admin.form.edit',[
            'form' => $form,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $validated = $request->validate([
            'title' => 'required|unique:forms,title,'.$form->id,
            'slug' => 'required|unique:forms,slug,'.$form->id,
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);
        $form->title = $request->title;
        $form->slug = Str::slug($request->slug, '-');
        if($request->hasFile('file')){
            $path = Storage::putFile('file', $request->file('file'));
            $form->file = $path;
        }
        $form->save();
        Toastr::success('Form Updated Successfully', 'Success');
        return redirect()->route('form.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $form = Form::find($form->id);
        $form->delete();
        Toastr::warning('Form Deleted Successfully', 'Success');
        return redirect()->route('form.index');
    }

    public function form()
    {
        return view('form',[
            'forms' => Form::orderBy('id', 'desc')->paginate(10),
            'title' => 'Form',
        ]);
    }

    public function download($slug){
        $form = Form::where('slug', $slug)->first();
        return Storage::download($form->file);
    }
}
