<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bank;
USE DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'user_id' => 'required'
        ],['user_id.required' => 'please enter login id.']);
        $this->validate($request,[
            'PWD' => 'required'
        ],['PWD.required' => 'enter your password.']);
        $user =DB::TABLE('banks')->where('user_id','=',$request->user_id)->pluck('user_id');
        $user = trim($user, '[]');
        $user = trim($user, '""');
        $id =DB::TABLE('banks')->where('user_id','=',$request->user_id)->pluck('id');
        $id = trim($id, '[]');
        if($user)
        {

            $obj= bank::find($id);
         /*  $paso = $obj->password;*/
         $isOk  = password_verify($request->PWD,$obj->password);
         
            if($isOk)
            {
                return view('layout.account')->with('post',$obj);
            }
            else
            {
            
            return back()->with('warning','invalid password or user name');
            }
        }
else
{
    return back()->with('warning','not macthes');
       // return view('layout.account');
}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = trim($id, 'admin');
        /*return $id;*/
        return view('layout.update')->with('fo',$id);

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
        $id = trim($id, 'admin');
        $obj= bank::find($id);
        if(($request->email==null) && ($request->mobile == null))
        {
        return back()->with('warning','enter email or mobile');
        }
        else
        {
            if($request->email)
            {
                $this->validate($request,[
                    'email' => 'required | email | unique:banks'],
                ['email.unique' => 'dear customer email which you trying to enter is already exist!']);
                $obj->email  = $request ->email;
                
                $obj->save();
                return back()->with('warning','information succefully updated');
            }
            if($request->mobile)
            {
                $this->validate($request,[
                    'mobile' => 'required | digits:10 | unique:banks'
                ],['mobile.digits' => 'mobile number must be numeric with 10 digits only']);
                
                $obj->mobile  = $request ->mobile;
                $obj->save();
                return back()->with('warning','information succefully updated');
            }
            if($request->email && $request->mobile)
            {
                $this->validate($request,[
                    'email' => 'required | email | unique:banks'],
                ['email.unique' => 'dear customer email which you trying to enter is already exist!']);
                $this->validate($request,[
                    'mobile' => 'required | digits:10 | unique:banks'
                ],['mobile.digits' => 'mobile number must be numeric with 10 digits only']);
                
                $obj->email  = $request ->email;
                $obj->mobile  = $request ->mobile;
                $obj->save();
                return back()->with('warning','information succefully updated');
            }
        }
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
