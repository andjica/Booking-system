<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //prikaz stranice za register
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        request()->validate([
            'name'=>'required|min:3|max:15',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:4|max:100'
       ]);

        
        User::create([
            'name'=>request()->name,
            'email'=>request()->email,
            'password'=>md5(request()->password),
            'role_id'=>'2'
        ]);
       
        return redirect('/register')->with('message', 'Uspesno ste se registrovali');
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
        //
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
        //
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
    public function signup()
    {
        return view('login');
    }
    public function login()
    {
       $user=User::where([
           'email'=>request()->email,
           'password'=>md5(request()->password)
       ])->first();

       if($user)
       {
            session()->put('user', $user);
           
            if($user->role_id == 1)
            {
                return redirect('/admin');
            }
            return redirect('/home')->with('message', 'Uspesno logovanje');
       }
       else{
           return redirect()->back()->with('message', 'Bad email or password');
       }

       
    }
    public function logout()
    {
        session()->forget('user');
        session()->flush();

        return redirect('/home')->with('message', 'Uspesno ste se izlogovali');
    }
}
