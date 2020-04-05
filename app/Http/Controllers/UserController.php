<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bank;
USE DB;
class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   /**/
   /*Global $variable;*/
   //public $x;
   //$GLOBAL['foo'];
   
    public function index()
    {
        
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
            'account' => 'required| digits:11 | numeric'
        ],['account.required' => 'please enter Account number.']);
        $account = DB::TABLE('banks')->where('account','=', $request->account)->pluck('account');
        $account = trim($account, '[]');
        $account = trim($account, '""');
        $this->validate($request,[
            'cif' => 'required | digits:8'
        ],['cif.required' => 'please enter cif number.']);
        $cifn = DB::TABLE('banks')->where('account','=', $request->account)->pluck('cif');
        $cifn = trim($cifn, '[]');
        $cifn = trim($cifn, '""');
        if($request->account == $account && $request->cif == $cifn)
        {        
                $ids =  DB::TABLE('banks')->where('account','=', $request->account)->pluck('user_id');
                $ids = trim($ids, '[]');
                $ids = trim($ids, '""');
                if($ids != 'user')
                {
                    return redirect('/newuser')->with('warning','you are not a new user');   
                }
            else
            {
        $this->validate($request,[
            'user_id' => 'required | unique:banks'
        ],['user_id.required' => 'make a unique username and its required']);
        $this->validate($request,[
            'wd' => 'required'
        ],['wd.required' => 'password']);
        $this->validate($request,[
            'rwd' => 'required'
        ],['rwd.required' => 'again password']);
        $id = DB::TABLE('banks')->where('account','=', $account)->pluck('id');
        $id = trim($id, '[]');
        if($request->wd != $request->rwd)
        {
            return back()->with('warning','password not matching');
        }
        else
        {
          $bank =bank::find($id);
          if($id)
          {
                $my = bcrypt($request->wd);
                $bank->user_id = $request->user_id;
                $bank->password = $my;
                $bank->save();

                return redirect('/newuser')->with('warning','welcome user all set done');
        }
        }
    }
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
        $id = trim($id,'user');
        
             return view('layout.upo')->with('bank',$id);
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
        $id = trim($id,'user');
       
        $this->validate($request,[
            'opwd' => 'required'
        ],['opwd.required' => 'enter old password']);
        $this->validate($request,[
            'pwd' => 'required'
        ],['pwd.required' => 'enter new password']);
        $this->validate($request,[
            'cpwd' => 'required'
        ],['cpwd.required' => 're-enter password']);
        $obj= bank::find($id);
        $isOk  = password_verify($request->opwd,$obj->password);
        if($isOk)
        {
               if($request->pwd != $request->cpwd)
               {
                return back()->with('warning','password not matching');  
               }
               else
               {
                $pass =$request->pwd;
                $pass = bcrypt($pass);
                $obj->password = $pass;
                $obj->save();
                return back()->with('warning','password changed succefully');   
               }
        }
        else
        {
            return back()->with('warning','invalid password');
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
        return 122;
    }
}
