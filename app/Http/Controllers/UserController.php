<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('users.index');   

        return view('/users/index')->with('users', user::where('status', '1')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo('Muy bien a funcionado');
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->image = $request->image;
        $user->category = $request->category;
        $user->password = $request->password;
        $user->status = 1;

        $user->save();

        if ($request->hasFile("image")) {
            $file = $request->image;
            $extension = $file->extension();
            $new_name = "user-" . $user->id . "_1." . $extension;
            $path = $file->storeAs('Imagenes', $new_name, 'public');
            $user->image = $path;
            $user->save();
        }

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users/show')->with('user', user::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users/edit')->with('user', user::find($id));
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
        $user = user::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->image = $request->image;
        $user->category = $request->category;
        $user->password = $request->password;
        $user->status = 1;

        $user->save();

        if ($request->hasFile("image")) {
            $file = $request->image;
            $extension = $file->extension();
            $new_name = "user-" . $user->id . "_1." . $extension;
            $path = $file->storeAs('Imagenes', $new_name, 'public');
            $user->image = $path;
            $user->save();
        }

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id);
        $user->status = 0;

        $user->save();

        return redirect()->route('users.index');
    }
}
