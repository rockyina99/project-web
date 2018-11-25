<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register');
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
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:5|alpha_num',
            'repassword' => 'required|same:password',
            'address' => 'required|min:10',
            'image' => 'required|mimes:jpg,png',
            'gender' => 'required',
            'date' =>'required'
        ]);


        $imageName = "";

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = $request->name;
            $imageName = $name.'.'.$image->getClientOriginalExtension();
            $folder = '../public/image/pictureUser/';
            $image->move($folder,$imageName);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $insert = new User();
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->password = $request->password;
        $insert->image = $imageName;
        $insert->gender = $request->gender;
        $insert->DOB = $request->date;
        $insert->address = $request->address;
        $insert->role = 'member';
        $insert->save();

        return redirect('/');
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
}
