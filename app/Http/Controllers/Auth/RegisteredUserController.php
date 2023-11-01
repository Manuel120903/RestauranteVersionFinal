<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

      //dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'category' => ['required', 'string', 'max:255'],
            'image' => ['required', 'file', 'max:255'],
            'status' => ['required', 'string', 'max:64'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

            //  $user = User::create([
            //      'name' => $request->name,
            //    'email' => $request->email,
            //      'category' => $request->category,
            //      'image'=>$request->image,
            //    'status' => $request->status,
            //     'password' => Hash::make($request->password),
            //  ]);

        $user = new User();
       $user->name=$request->name;  
       $user->email=$request->email;
       $user->category=$request->category;
       $user->image='Imagenes/user/default.jpg';
       $user->status=$request->status;
       $user->password=Hash::make($request->password);
      
       $user->save();

       if($request->hasFile("image")){
        $file = $request->image;
        $extension=$file->extension();
        $new_name="user_".$user->id."_1.".$extension;
        $path = $file->storeAs('Imagenes/user',$new_name, 'public');
        $user->image=$path;
        $user->save();    
    }


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
