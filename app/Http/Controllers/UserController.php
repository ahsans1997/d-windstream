<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index',[
            'user' => User::latest()->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.user.edit',[
            'user' => User::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);



        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function image(Request $request, $id)
    {
        if(User::findOrFail($id)->profile_photo_path){
            $location = 'public/assets/images/user/'.User::findOrFail($id)->profile_photo_path;
            unlink(base_path($location));
            User::findOrFail($id)->update([
                'profile_photo_path' => "",
            ]);
        }
        $image = $request->file('profile_photo_path');
        $image_name = 'user'.".".$image->getClientOriginalExtension();
        $image_location = 'public/assets/images/user/'.$image_name;
        Image::make($image)->save(base_path($image_location));
        User::findOrFail($id)->update([
            'profile_photo_path' => $image_name,
        ]);
        return back();
    }
    public function password(Request $request, $id)
    {
        $validated = $request->validate([
            'password' => 'required|Confirmed',
        ]);
        $password = Hash::make($request->password);
        $user = User::findOrFail($id);
        $user->password = $password;
        $user->save();
        return back();
    }
}
