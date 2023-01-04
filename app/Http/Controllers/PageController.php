<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pages' => Page::get(),
        ];
        return view('admin.page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug',
            'image' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp,pdf| max:2024',
            'file' => 'max:2024',

        ]);

        $page = new Page();
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->description = $request->description;

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/page'), $imageName);
            $page->image = $imageName;
        }

        if ($request->file) {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(storage_path('app/public/page'), $fileName);
            $page->file = $fileName;
        }

        $page->save();
        Toastr::success("Page creted successfuly");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'page' => Page::find($id),
        ];
        return view('admin.page.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp| max:2024',
            'file' => 'mimes:pdf,xlm,xls,xlsm,xlsx,xlt,xltm,xltx,doc,docm,docx,dot,dotx,max:2024',

        ]);

        $page = Page::find($id);
        $page->title = $request->title;
        $page->description = $request->description;
        $page->status = $request->status;

        if ($request->redirect) {
            $page->redirect = $request->redirect;
            $page->redirect_url = $request->redirect_url;
        }else{
            $page->redirect = 0;
            $page->redirect_url = null;
        }



        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/page'), $imageName);
            $page->image = $imageName;
        }



        if ($request->file) {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(storage_path('app/public/page'), $fileName);
            $page->file = $fileName;
        }

        if(isset($request->delete_image)){
            $page->image = null;
        }
        if(isset($request->delete_file)){
            $page->file = null;
        }

        $page->save();
        Toastr::success("Page updated successfuly");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        Toastr::success("Page deleted successfuly");
        return redirect()->back();
    }
}
